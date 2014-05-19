<?php

/**
 * @author  smagic39<smagic39@gmail.com>
 */
include("./admin/protected/models/Jobs.php");
include("./admin/protected/models/JobLocation.php");
include("./admin/protected/models/JobWorktype.php");
include("./admin/protected/models/JobTeams.php");
include("./admin/protected/models/JobAlerts.php");
include("./admin/protected/models/JobTestimonials.php");
include("./admin/protected/models/JobContactus.php");
include("./admin/protected/models/JobAbout.php");
include("./admin/protected/models/Files.php");
include("./admin/protected/models/JobResumes.php");
include("./admin/protected/models/JobCovers.php");
include("./admin/protected/models/JobCategories.php");
include("./admin/protected/models/JobSubcategories.php");
include("./admin/protected/models/JobTestimonialUser.php");

class PageController extends Controller {

    /**
     * root function
     * @return type
     */
    public function actions() {
        return array(
// captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
// They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function filters() {
        parent::filters();
    }

    /*
     * get All Category for Select
     */

    public function getSubAllCategory($parent = null, $sub_cat_id = null) {
        $condition = 'JobSubcategories.parent !=0 ';
        $condition .= $sub_cat_id ? ' AND JobSubcategories.cat_id=' . $sub_cat_id : '';
        $condition .= $parent ? ' AND JobSubcategories.parent=' . $parent : '';

        $models = Yii::app()->db->createCommand()
                ->select('JobCategories.*')
                ->from('tbl_job_categories JobCategories')
                ->where($condition)
                ->leftJoin('tbl_job_subcategories JobSubcategories', 'JobSubcategories.cat_id = JobCategories.cat_id')
                ->queryAll();
        $tmp = array();
        foreach ($models as $key) {
            $tmp[$key['cat_id']] = $key['cat_name'];
        }
        return $tmp;
    }

    public function getAllCategory() {
        $models = Yii::app()->db->createCommand()
                ->select('JobCategories.*')
                ->from('tbl_job_categories JobCategories')
                ->where('JobSubcategories.parent=0')
                ->leftJoin('tbl_job_subcategories JobSubcategories', 'JobSubcategories.cat_id = JobCategories.cat_id')
                ->queryAll();
        $tmp = array();
        foreach ($models as $key) {
            $tmp[$key['cat_id']] = $key['cat_name'];
        }
        return $tmp;
    }

    /**
     * 
     * @param type $id
     * @return type
     */
    public function getListSubCategory($id) {
        $condition = !empty($id) ? 'JobSubcategories.parent=' . $id : 'JobSubcategories.parent != 0';
        $models = Yii::app()->db->createCommand()
                ->select('JobCategories.*')
                ->from('tbl_job_categories JobCategories')
                ->where($condition)
                ->leftJoin('tbl_job_subcategories JobSubcategories', 'JobSubcategories.cat_id = JobCategories.cat_id')
                ->queryAll();
        $tmp = array();
        foreach ($models as $key) {
            $tmp[$key['cat_id']] = $key['cat_name'];
        }
        return $tmp;
    }

    /*
     * view job board
     */

    public function actionIndex() {
// implement jobs board
        $criteria = $this->getParameter();
        $item_count = Jobs::model()->count($criteria);
//implement dropdown search
        $jobs = new Jobs();
        $local = new JobLocation();
        $workTy = new JobWorktype();

        $categories = $this->getAllCategory();
        $parent = (isset($_GET['cat_id']) && is_int($_GET['cat_id'])) ? $_GET['cat_id'] : null;
        $sub_cat_id = (isset($_GET['sub_cat_id']) && is_int($_GET['sub_cat_id'])) ? $_GET['sub_cat_id'] : null;
        $sub_categories = $this->getSubAllCategory($parent, $sub_cat_id);

        $location = CHtml::ListData(JobLocation::model()->findAll('city IS NOT NULL GROUP BY city'), 'city', 'city');
        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');
        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['listPerPage']);
        $pages->applyLimit($criteria); // the trick is here!
        $this->render('index', array(
            'dataProvider' => Jobs::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['listPerPage'],
            'pages' => $pages,
            'workTy' => $workTy,
            'local' => $local,
            'sub_categories' => $sub_categories,
            'categories' => $categories,
            'locations' => $location,
            'worktypes' => $worktype,
            'model' => $jobs,
        ));
    }

    /*
     * view detail job
     */

    public function actionView($id) {
        $model = Jobs::model()->findByPk($id);


        $categories = CHtml::ListData(JobCategories::model()->findAll(), 'cat_id', 'cat_name');
        $location = CHtml::ListData(JobLocation::model()->findAll(), 'job_location_id', 'address');
        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');

        $this->render('view_job_detail', array(
            'job' => $model,
            'categories' => $categories,
            'locations' => $location,
            'worktypes' => $worktype,
        ));
    }

    /**
     * view apply
     * @param type $id
     */
    public function actionApply($id) {
        $this->render('apply_job', array());
    }

    /**
     * view about
     */
    public function actionAbout() {
        $dataProvider = new CActiveDataProvider('JobAbout', array(
            'pagination' => array(
                'pageSize' => 8,
            ),
        ));
        $this->render('about', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * view Contact
     */
    public function actionContact() {
        $model = new JobContactus;
        if (isset($_POST['JobContactus'])) {

            $model->attributes = $_POST['JobContactus'];
            $model['date_created'] = date('Y-m-d H:i:s');
            $reg_cv = array();
            if ($model->validate()) {
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', "Thank you for Contact Us");
                    $reg_cv['name'] = $_POST['JobContactus']['name'];
                    $reg_cv['email'] = trim($_POST['JobContactus']['email']);
                    $this->sendEmailContact($reg_cv);
                    $reg_cv['link'] = Yii::app()->getBaseUrl(true) . '/admin/index.php?r=jobContactus/view&id=' . $model->contactus_id;
                    $reg_cv['content'] = 'User Contact Us at The 33Talent';
                    $reg_cv['title'] = 'User Contact Us at The 33Talent';
                    $this->sendEmailAdmin($reg_cv);
                }

                $this->redirect(array('index'));
            }

            $this->redirect(array('page/index#message-info'));
        }

        $this->render('contact', array(
            'model' => $model,
            'ms' => isset($ms['value4_text']) ? $ms['value4_text'] : ''
        ));
    }

    /**
     * view Teams
     */
    public function actionTeams() {
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        $criteria = new CDbCriteria();
        $item_count = JobTeams::model()->count($criteria);
        $pages = new CPagination($item_count);
        $pages->pageSize = 5;

        $pages->applyLimit($criteria);
        $models = Yii::app()->db->createCommand()
                ->select('teams.*,files.*')
                ->from('tbl_job_teams teams')
                ->limit(Yii::app()->params['listPerPage'], $page - 1)
                ->leftJoin('tbl_job_files files', 'files.file_id = teams.image_id');
        $data = $models->queryAll();
        $this->render('teams', array(
            'data' => $data,
            'page_size' => Yii::app()->params['listPerPage'],
            'item_count' => $item_count,
            'pages' => $pages
        ));
    }

    /**
     * @return null 
     */
    public function actionAddTestimonial() {
  $model = new JobTestimonialUser;
        $uploaded = false;
        $uri = 'No image';
        $dir = Yii::getPathOfAlias('application.uploads');
        if (isset($_POST['JobTestimonialUser'])) {
            $model->attributes = $_POST['JobTestimonialUser'];

            $file = CUploadedFile::getInstance($model, 'image');
            if ($file && is_object($file) && get_class($file) === 'CUploadedFile') {
                $fileName = uniqid(time()) . '.' . $file->getExtensionName();
                $uploaded = $file->saveAs(Yii::getPathOfAlias('webroot') . '/admin/protected/uploads/files/testimonials/' . $fileName); //boolean
                $uri = 'uploads/files/testimonials/' . $fileName;
            }
            $model->image = $uri;
            if ($model->validate()) {
                if ($model->save()) {
                    Yii::app()->user->setFlash('success', "You have already added  your Testimonial with Us.");
                    $this->redirect(array('index'));
                }
            }
        }
        $this->render('add_testimonial', array(
            'model' => $model,
            'uploaded' => $uploaded,
            'dir' => $dir,
        ));
    }

    /**
     *
     * @param type $file
     * @param type $model
     * @param type $job_id
     * @param type $employ_id
     * @return type
     */
    public function updateResume($file, $model, $job_id, $employ_id, $type = null) {

        $file_tmp = CUploadedFile::getInstance($model, 'file_id');
        $fileName = uniqid(time()) . $job_id . '.' . $file_tmp->getExtensionName();
        if ($file_tmp && is_object($file_tmp) && get_class($file_tmp) === 'CUploadedFile') {
            $file_tmp->saveAs(Yii::app()->basePath . '/../uploads/files/' . $fileName);

            $uri = 'uploads/files/' . $fileName;
            $command = Yii::app()->db->createCommand();
            $command->insert('tbl_job_files', array(
                'uri' => $uri,
                'timestamp' => new CDbExpression('NOW()'),
            ));

            $command->execute();
            //insert to db
            $file_id = Yii::app()->db->getLastInsertID();
            $resume = new JobResumes;
            $resume->employ_id = $employ_id;
            $resume->job_id = $job_id;
            $resume->file_id = $file_id;
            $resume->type = $type;
            $resume->lastest = new CDbExpression('NOW()');
            if ($type == 1) {
                $resume->confirm_apply = sha1($employ_id + $job_id + $type);
            } else {
                $resume->confirm_register = sha1($employ_id + $job_id + $type);
            }

            $resume->save();
            return $resume->resume_id;
        }
        return true;
    }

    /**
     *
     * @param type $file
     * @param type $model
     * @param type $job_id
     * @param type $employ_id
     * @param type $type
     */
    public function updateJobCovers($file, $model, $job_id, $employ_id, $type) {
        if ($type == 'Attach') {
            $file_tmp = CUploadedFile::getInstance($model, 'value');
            $fileName = uniqid(time()) . $job_id . '.' . $file_tmp->getExtensionName();

            if ($file_tmp && is_object($file_tmp) && get_class($file_tmp) === 'CUploadedFile') {
                $file_tmp->saveAs(Yii::app()->basePath . '/../uploads/files/' . $fileName);

                $uri = 'uploads/files/' . $fileName;
                $command = Yii::app()->db->createCommand();
                $command->insert('tbl_job_files', array(
                    'uri' => $uri,
                    'timestamp' => date('Y-m-d H:i:s', time()),
                ));

                $command->execute();
//insert to db
                $file_id = Yii::app()->db->getLastInsertID();
                $resume = new JobCovers;
                $resume->employ_id = $employ_id;
                $resume->job_id = $job_id;
                $resume->value = $file_id;
                $resume->type = $type;
                $resume->save();
                return $resume->cover_id;
            }
        }

        $resume = new JobCovers;
        $resume->employ_id = $employ_id;
        $resume->job_id = $job_id;
        $resume->value = $file['value'];
        $resume->type = $type;
        $resume->save();
        return $resume->cover_id;
    }

    /**
     * type =1 apply,
     * @param type $type
     */
    public function checkExistentUser($type) {

        $criteria = new CDbCriteria();

        $criteria->select = 't.employ_id';
        $criteria->condition = " JobEmployees.email='" . $_POST['JobEmployees']['email'] .
                "' AND t.job_id=" . $_GET['job'] . ' AND t.type=' . $type;
        $criteria->join = ' LEFT JOIN tbl_job_employees as JobEmployees ON  JobEmployees.employ_id = t.employ_id';
        $resume_tmp = JobResumes::model()->find($criteria);
        if ($resume_tmp) {
            Yii::app()->user->setFlash('error', "You have already applied for this Job");
            $this->redirect(array('page/index#message-info'));
        }
    }

    public function actionCheckEmailRegister() {
        $this->layout = false;
        if (CHtml::encode($_POST['email'])) {
            $criteria = new CDbCriteria();
            $criteria->select = 't.employ_id';
            $criteria->condition = " JobEmployees.email='" . $_POST['email'] . "' AND t.type=2";
            $criteria->join = ' LEFT JOIN tbl_job_employees as JobEmployees ON  JobEmployees.employ_id = t.employ_id';
            $resume_tmp = JobResumes::model()->find($criteria);
            if ($resume_tmp) {
                echo 'false';
                die;
            }
            echo 'true';
            die;
        }
        Yii::app()->end();
    }

    public function actionCheckEmailRegisterJob() {
        $this->layout = false;
        if (CHtml::encode($_POST['email'])) {
            $criteria = new CDbCriteria();
            $criteria->select = 't.employ_id';
            $criteria->condition = " JobEmployees.email='" . $_POST['email'] . "' AND t.type=1";
            $criteria->join = ' LEFT JOIN tbl_job_employees as JobEmployees ON  JobEmployees.employ_id = t.employ_id';
            $resume_tmp = JobResumes::model()->find($criteria);
            if ($resume_tmp) {
                echo 'false';
                die;
            }
            echo 'true';
            die;
        }
        Yii::app()->end();
    }

    // 2 register cv
    public function checkExistentCVUser($type) {
        $criteria = new CDbCriteria();
        $criteria->select = 't.employ_id';
        $criteria->condition = " JobEmployees.email='" . $_POST['JobEmployees']['email'] . "' AND t.type=" . $type;
        $criteria->join = ' LEFT JOIN tbl_job_employees as JobEmployees ON  JobEmployees.employ_id = t.employ_id';
        $resume_tmp = JobResumes::model()->find($criteria);
        if ($resume_tmp) {
            Yii::app()->user->setFlash('error', "You have already Registered your CV with Us.");
            $this->redirect(array('page/index#message-info'));
        }
    }

    /**
     * view for apply
     */
    public function actionRegister() {
        $model = new JobEmployees;
        $resume = new JobResumes;
        $cover = new JobCovers;

        if (isset($_GET['job']) && !empty($_GET['job'])) {
            $job = Jobs::model()->findByPk($_GET['job']);
            if (!$job) {

                $this->redirect(array('page/index'));
            }

            if (isset($_POST['JobEmployees']) && $_POST['JobEmployees']) {
                //check existent via job
                $this->checkExistentUser(1);

                //update and upload file cover not
                $model->attributes = $_POST['JobEmployees'];
                $model->save();
                $reg_cv = array();

                //upload file and upload resume
                $check[] = $this->updateResume($_POST['JobResumes'], $resume, $_GET['job'], $model->employ_id, 1);
                $reg_cv['confirm_link'] = Yii::app()->getBaseUrl(true) . '/index.php?r=page/confirm&id=' . $_GET['job'] . '&confirm_code=' . sha1($model->employ_id + $_GET['job'] + 1);

                //cover leter
                $type = $_POST['JobEmployees']['coverNoteType'];
                $check[] = $this->updateJobCovers($_POST['JobCovers'], $cover, $_GET['job'], $model->employ_id, $type);
                if (!in_array(null, $check)) {
                    $reg_cv['link'] = Yii::app()->getBaseUrl(true) . '/admin/index.php?r=jobEmployees/view&id=' . $model->employ_id . '&type=apply';
                    $reg_cv['name'] = $_POST['JobEmployees']['first_name'] . ' ' . $_POST['JobEmployees']['last_name'];
                    $reg_cv['email'] = trim($_POST['JobEmployees']['email']);
                    $reg_cv['title'] = $job['title'];
                    $reg_cv['recruiter_name'] = $job['recruiter_name'];
                    $reg_cv['recruiter_email'] = $job['recruiter_email'];
                    $status = $this->sendEmailApply($reg_cv);
                    $reg_cv['content'] = 'User Apply User CV at The 33Talent  ' . $job['title'];
                    $reg_cv['title'] = 'User Apply User CV at The 33Talent  ' . $job['title'];
                    $this->sendEmailAdmin($reg_cv);
                }

                Yii::app()->user->setFlash('success', "Thank you for applying for the post of " . $job['title']);
                $this->redirect(array('page/index#message-info'));
            }
        } else {
            $this->redirect(array('page/index#message-info'));
        }

        $this->render('register', array('model' => $model, 'job' => $job, 'model_file' => $resume, 'cover' => $cover));
    }

    public function actionConfirm() {

        if (!empty($_GET['id']) && (int) $_GET['id'] && !empty($_GET['confirm_code'])) {
            $criteria = new CDbCriteria();
            $criteria->select = 't.resume_id ';
            $criteria->condition = "t.job_id='" . $_GET['id'] . "'AND t.confirm_apply='" . $_GET['confirm_code'] . "'";
            $data = JobResumes::model()->find($criteria);
            if (!$data || (isset($data['confirm_apply']) && $data['confirm_apply'] == 1)) {
                $this->redirect(array('index'));
            }
            $model = JobResumes::model()->findByPk($data['resume_id']);
            $model->confirm_apply = 1;
            $model->save();
        } else {
            $this->redirect(array('index'));
        }
        $this->render('confirm');
    }

    public function actionConfirmAlert() {

        if (!empty($_GET['id']) && (int) $_GET['id'] && !empty($_GET['confirm_code'])) {
            $criteria = new CDbCriteria();
            $criteria->select = 't.employ_id,t.alert_id,t.type';
            $criteria->condition = "t.employ_id='" . $_GET['id'] . "'AND t.confirm_code='" . $_GET['confirm_code'] . "'";
            $data = JobAlerts::model()->find($criteria);
            if (!$data || (isset($data['confirm_code']) && $data['confirm_code'] == 1)) {
                $this->redirect(array('index'));
            }
            $model = JobAlerts::model()->findByPk($data['alert_id']);
            $model->confirm_code = '1';
            $model->type = $data['type'];
            $model->save();
        } else {
            $this->redirect(array('index'));
        }
        $this->render('confirmalert');
    }

    /**
     * 
     * @param type $content
     * @param type $to
     */
    public function sendEmailAdmin($data) {

        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "admin";
        $message->subject = $data['content'];
        $body = "<tbody>";
        $body .="<tr>";
        $body .="<td>" . $data['content'] . "</td>";
        $body .="</tr>";
        $body .=" <tr>";
        $body .=" <td>Name : " . $data['name'] . "</td>";
        $body .="</tr>";
        $body .="<tr>";
        $body .="<td>Email : " . $data['email'] . "</td>";
        $body .="</tr>";
        $body .="<tr>";
        $body .="<td><a href='" . $data['link'] . "'>Admin Link</a></td>";
        $body .="</tr>";
        $body .="</tbody>";
        $message->setBody($body, 'text/html');
        $message->addTo($from);
        $message->from = $from;
        Yii::app()->mail->send($message);
    }

    /**
     * 
     * @param type $data
     * @return type
     */
    public function sendEmailApply($data) {
        $title = $data['title'];
        $name = $data['name'];
        $confirm_link = $data['confirm_link'];
        $recruiter = isset($data['recruiter_name']) ? $data['recruiter_name'] : '';
        $recruiter_email = isset($data['recruiter_email']) ? $data['recruiter_email'] : '';
        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "apply";
        $message->subject = $title;
        $message->setBody(array(
            'name' => $name,
            'job_title' => $title,
            'confirm_link' => $confirm_link,
            'recruiter' => $recruiter,
            'recruiter_email' => $recruiter_email), 'text/html');
        $message->addTo($data['email']);
        $message->from = $from;
        return Yii::app()->mail->send($message);
    }

    public function sendEmailContact($data) {
        $name = $data['name'];
        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "contact";
        $message->subject = 'Email Contact at 33Talent';
        $message->setBody(array(
            'name' => $name), 'text/html');
        $message->addTo($data['email']);
        $message->from = $from;
        return Yii::app()->mail->send($message);
    }

    public function sendEmailRegisterCV($data) {
        $name = $data['name'];
        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "registercv";
        $message->subject = 'Register Your CV at The 33Talent';
        $message->setBody(array(
            'name' => $name,
            'title' => 'Register Your CV at The 33Talent'), 'text/html');
        $message->addTo($data['email']);
        $message->from = $from;
        return Yii::app()->mail->send($message);
    }

    public function sendEmailSample($data) {
        $content = $data['content'];
        $title = $data['title'];
        $name = $data['name'];
        $recruiter = isset($data['recruiter_name']) ? $data['recruiter_name'] : '';
        $recruiter_email = isset($data['recruiter_email']) ? $data['recruiter_email'] : '';
        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "view";
        $message->subject = $title;
        $message->setBody(array('content' => $content,
            'name' => $name,
            'title' => $title,
            'recruiter' => $recruiter,
            'recruiter_email' => $recruiter_email), 'text/html');
        $message->addTo($data['email']);
        $message->from = $from;
        return Yii::app()->mail->send($message);
    }

    public function sendEmailAlert($data) {
        $name = $data['name'];
        $confirm_link = $data['confirm_link'];
        $from = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $message = new YiiMailMessage;
        $message->view = "alert";
        $message->subject = ' Signing up for Job Alerts at The 33Talent';
        $message->setBody(array('name' => $name, 'confirm_link' => $confirm_link), 'text/html');
        $message->addTo($data['email']);
        $message->from = $from;
        return Yii::app()->mail->send($message);
    }

    /**
     * register alert CV
     */
    public function actionRegisterCV() {
        $model = new JobEmployees;
        $resume = new JobResumes;
        $reg_cv = array();
        if (isset($_POST['JobEmployees']) && $_POST['JobEmployees']) {

            $this->checkExistentCVUser(2); //check exist
            $model_tmp = JobEmployees::model()->find("email ='" . trim($_POST['JobEmployees']['email']) . "'");
            $employ_id = '';
            if ($model_tmp) {

                $employ_id = $model_tmp['employ_id'];
                $model_update = JobEmployees::model()->findByPk($employ_id);
                $model_update->employ_id = $model_tmp['employ_id'];
                $model_update->first_name = $_POST['JobEmployees']['first_name'];
                $model_update->last_name = $_POST['JobEmployees']['last_name'];
                $model_update->mobile = $_POST['JobEmployees']['mobile'];
                $model_update->linkedin_profile = $_POST['JobEmployees']['linkedin_profile'];

                if ($model_update->save()) {
                    $this->updateResume($_POST['JobResumes']['file_id'], $resume, 0, $employ_id, 2);
                }
            } else {

                $model->first_name = $_POST['JobEmployees']['first_name'];
                $model->email = $_POST['JobEmployees']['email'];
                $model->last_name = $_POST['JobEmployees']['last_name'];
                $model->mobile = $_POST['JobEmployees']['mobile'];
                $model->linkedin_profile = $_POST['JobEmployees']['linkedin_profile'];

                if ($model->save()) {
                    $employ_id = $model->employ_id;

                    $this->updateResume($_POST['JobResumes']['file_id'], $resume, 0, $model->employ_id, 2); //2 for register cv
                }
            }
            $reg_cv['link'] = Yii::app()->getBaseUrl(true) . '/admin/index.php?r=jobEmployees/view&id=' . $employ_id . '&type=regcv';
            $reg_cv['name'] = $_POST['JobEmployees']['first_name'] . ' ' . $_POST['JobEmployees']['last_name'];
            $reg_cv['email'] = trim($_POST['JobEmployees']['email']);
            $reg_cv['content'] = 'User have already registed CV';
            $this->sendEmailAdmin($reg_cv);
            $this->sendEmailRegisterCV($reg_cv);

            Yii::app()->user->setFlash('success', "Thank you for registering with us");
            $this->redirect(array('page/index#message-info'));
        }
        $this->render('register_cv', array(
            'model' => $model,
            'model_file' => $resume
        ));
    }

    /**
     * 
     * @param type $cat_id
     * @param type $sub_cat_id
     * @param type $worktype_id
     * @param type $location_id
     * @param type $employ_id
     * @param type $type
     */
    public function updateAlert($cat_id, $sub_cat_id = array(), $worktype_id, $location_id, $employ_id, $type = null) {

        $cat = $cat_id ? $cat_id : '';
        $sub_cat_id = is_array($sub_cat_id) ? $sub_cat_id : array($sub_cat_id);
        $location_id = is_array($location_id) ? $location_id : array($location_id);
        $worktype_id = is_array($worktype_id) ? $worktype_id : array($worktype_id);
        $cat .= join('|', $sub_cat_id);
        $job_alter_tmp = JobAlerts::model()->find("employ_id = '$employ_id'");
        if ($job_alter_tmp) {
            $model_update = JobAlerts::model()->findByPk($job_alter_tmp['alert_id']);
            $model_update->cat_id = $cat;
            $model_update->job_location_id = join('|', $location_id);
            $model_update->worktype_id = join('|', $worktype_id);
            $model_update->type = $type;
            $model_update->confirm_code = sha1($employ_id);
            return $model_update->save();
        } else {
            $job_alter = new JobAlerts;
            $job_alter->cat_id = $cat;
            $job_alter->employ_id = $employ_id;
            $job_alter->job_location_id = join('|', $location_id);
            $job_alter->worktype_id = join('|', $worktype_id);
            $job_alter->type = $type;
            $job_alter->confirm_code = sha1($employ_id);

            return $job_alter->save();
        }
        return true;
    }

    /**
     * register Alert CV
     */
    public function actionRegisterAlert() {
        $model = new JobEmployees;
        $job_alert = new JobAlerts;
        $categories = CHtml::ListData(JobCategories::model()->findAll(), 'cat_id', 'cat_name');
        $location = CHtml::ListData(JobLocation::model()->findAll('city IS NOT NULL GROUP BY city'), 'job_location_id', 'city');
        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');

        if (isset($_POST['JobEmployees']) && $_POST['JobEmployees']) {


             $model_tmp = '';
            
            $model_tmp = JobEmployees::model()->find("email ='" . $_POST['JobEmployees']['email'] . "'");
            
              if(!empty($model_tmp)){
                    $check_alert = JobAlerts::model()->find("employ_id ='" . $model_tmp['employ_id'] . "'");
                    if ($check_alert) {

                        Yii::app()->user->setFlash('success', "Email address registed");
                        $this->redirect(array('page/index#message-info'));
                    }
              }
 
            $cat_id = isset($_POST['JobAlerts']["cat_id"]) ? $_POST['JobAlerts']["cat_id"] : 0;
            $sub_cat_id = isset($_POST['JobAlerts']["sub_cat_id"]) ? $_POST['JobAlerts']["sub_cat_id"] : 0;
            $worktype_id = isset($_POST['JobAlerts']["worktype_id"]) ? $_POST['JobAlerts']["worktype_id"] : 0;
            $location_id = isset($_POST['JobAlerts']["location_id"]) ? $_POST['JobAlerts']["location_id"] : 0;

            $reg_cv = array();
            $employ_id = '';
            $check = false;

            if ($model_tmp) {
                    
                $employ_id = $model_tmp['employ_id']; 
                $model_update = JobEmployees::model()->findByPk($employ_id);
                $model_update->employ_id = $employ_id;
                $model_update->first_name = $_POST['JobEmployees']['first_name'];
                $model_update->email = $_POST['JobEmployees']['email'];
                $model_update->last_name = $_POST['JobEmployees']['last_name'];
                $model_update->mobile = $model_tmp['mobile'];
                if ($model_update->save()) {
                    $check = true;
                    $this->updateAlert($cat_id, $sub_cat_id, $worktype_id, $location_id, $employ_id, 1);
                }
            } else {
                      $model = new JobEmployees();
                $model->first_name = $_POST['JobEmployees']['first_name'];
                $model->email = $_POST['JobEmployees']['email'];
                $model->last_name = $_POST['JobEmployees']['last_name'];
                $model->mobile = 0;               
                if ($model->save()) {
                     $check = true;
                     $employ_id = $model->employ_id;
                    
                    $this->updateAlert($cat_id, $sub_cat_id, $worktype_id, $location_id, $employ_id, 1);
                }
            }

            if ($check) {
                $reg_cv['confirm_link'] = Yii::app()->getBaseUrl(true) . '/index.php?r=page/confirmalert&id=' . $employ_id . '&confirm_code=' . sha1($employ_id);
                $reg_cv['link'] = Yii::app()->getBaseUrl(true) . '/admin/index.php?r=jobEmployees/view&id=' . $employ_id . '&type=alert';
                $reg_cv['name'] = $_POST['JobEmployees']['first_name'] . ' ' . $_POST['JobEmployees']['last_name'];
                $reg_cv['email'] = trim($_POST['JobEmployees']['email']);
                $this->sendEmailAlert($reg_cv);
                $reg_cv['content'] = ' User Register Alert Job at The 33Talent';
                $this->sendEmailAdmin($reg_cv);
            }
            Yii::app()->user->setFlash('success', "Thank for Signing Up at Job Alerts!");
            $this->redirect(array('page/index#message-info'));
        }
        $this->render('registerAlert', array(
            'model' => $model,
            'worktype' => $worktype,
            'job_alert' => $job_alert,
            'location' => $location,
            'categories' => $categories
        ));
    }

    /**
     * detail team
     * @param type $id
     */
    public function actionTeamsDetail($id) {
        $models = Yii::app()->db->createCommand()
                ->select('teams.*,files.*')
                ->from('tbl_job_teams teams')
                ->where("teams_id = '$id'")
                ->leftJoin('tbl_job_files files', 'files.file_id = teams.image_id');
        $team = $models->queryRow();
        $this->render('teams_detail', array('team' => $team));
    }

    /**
     * view List Testimonial
     */
    public function actionTestimonials() {
        $criteria = new CDbCriteria();
        $criteria->condition = 'approved=1';
        $item_count = JobTestimonialUser::model()->count($criteria);
        $pages = new CPagination($item_count);
        $pages->pageSize=5;
        $pages->applyLimit($criteria);

        $this->render('testimonials', array(
            'data' => JobTestimonialUser::model()->findAll($criteria),
            'pages' => $pages
        ));
    }

    /**
     * ajax to get list Sub Cateogry
     */
    public function actionDynamicsubCategories() {
//  $data = JobSubcategories::model()->findAll('parent=:parent_id', array(':parent_id' => (int) $_POST['cat_id']));
        $str = '';
        $data = $this->getListSubCategory($_POST['cat_id']);
        if (!empty($_POST['cat_id']) && $data) {
            foreach ($data as $id => $value) {
                $str .=CHtml::tag('option', array('value' => $id), CHtml::encode($value), true);
            }
        } else {
            $str .= "<option value=''>--All Sub Categories--</option>";
        }
        echo $str;
    }

    public function getParameter() {
        $criteria = new CDbCriteria();
        $condition = '1=1  ';
        $select = 't.*';
        $join = '';

        if (isset($_GET['JobLocation']['city']) && !empty($_GET['JobLocation']['city'])) {

            $select .= ',JobLocation.city';
            $condition .= " AND JobLocation.city LIKE '%" . $_GET['JobLocation']['city'] . "%'";
            $join .= ' LEFT JOIN tbl_job_location AS JobLocation ON JobLocation.job_location_id= t.job_location_id';
        }
        if (isset($_GET['JobWorktype']['worktype_id']) && (int) $_GET['JobWorktype']['worktype_id']) {

            $select .= ',JobWorktype.worktype_id,JobWorktype.name';
            $condition .= ' AND  JobWorktype.worktype_id = ' . $_GET['JobWorktype']['worktype_id'];
            $join .= ' LEFT JOIN tbl_job_worktype AS JobWorktype ON JobWorktype.worktype_id = t.worktype_id';
        }
        if (isset($_GET['cat_id']) && (int) $_GET['cat_id']) {
            $select .= ',JobCategories.cat_id,JobCategories.cat_name';
            $condition .= ' AND  JobCategories.cat_id = ' . $_GET['cat_id'];
            $join .= ' LEFT JOIN tbl_job_categories AS JobCategories ON JobCategories.cat_id = t.cat_id';
        }
        if (isset($_GET['sub_cat_id']) && (int) $_GET['sub_cat_id']) {
            if (empty($_GET['cat_id'])) {
                $select .= ',JobCategories.cat_id,JobCategories.cat_name';
                $condition .= ' AND  JobCategories.cat_id = ' . $_GET['sub_cat_id'];
                $join .= ' LEFT JOIN tbl_job_categories AS JobCategories ON JobCategories.cat_id = t.cat_id';
            } else {

                $condition .= ' OR JobCategories.cat_id = ' . $_GET['sub_cat_id'];
            }
        }
        if (isset($_GET['Keywords']) && $_GET['Keywords']) {
            $condition .= ' AND  t.title LIKE "%' . $_GET['Keywords'] . '%"';
        }
        $criteria->select = $select;
        $criteria->condition = $condition;
        $criteria->join = $join;
        $criteria->order = 't.job_id DESC';
        return $criteria;
    }

// Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
