<?php

/**
 * @author  smagic39<smagic39@gmail.com>
 */
include("./admin/protected/models/Jobs.php");
include("./admin/protected/models/JobLocation.php");
include("./admin/protected/models/JobWorktype.php");
include("./admin/protected/models/JobTeams.php");
include("./admin/protected/models/JobTestimonials.php");
include("./admin/protected/models/JobContactus.php");
include("./admin/protected/models/JobAbout.php");
include("./admin/protected/models/Files.php");
include("./admin/protected/models/JobResumes.php");
include("./admin/protected/models/JobCovers.php");
include("./admin/protected/models/JobCategories.php");
include("./admin/protected/models/JobSubcategories.php");

class PageController extends Controller {

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

  
    public function actionIndex() {
        // implement jobs board
        $criteria = new CDbCriteria();
        $criteria->order='job_id DESC';
        $item_count = Jobs::model()->count($criteria);
        
        //implement dropdown search
        $jobs = new Jobs();
        $categories = CHtml::ListData(JobCategories::model()->findAll(), 'cat_id', 'cat_name');
        $location = CHtml::ListData(JobLocation::model()->findAll(), 'job_location_id', 'address');
        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');
        
        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['listPerPage']);
        $pages->applyLimit($criteria);  // the trick is here!
        $this->render('index', array(
            'dataProvider' => Jobs::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['listPerPage'],
            'pages' => $pages,
            'categories' => $categories,
            'locations' => $location,
            'worktypes' => $worktype,
            'model' => $jobs,
        ));
    }

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
    public function actionApply($id) {
        $this->render('apply_job', array(
        ));
    }

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

    public function actionContact() {
        $model = new JobContactus;
        $ms = Ms::model()->findByAttributes(array('var_name' => 'admin_contact'));
        if (isset($_POST['JobContactus'])) {

            $model->attributes = $_POST['JobContactus'];
            $model['date_created'] = date('Y-m-d H:i:s');
            if ($model->validate()) {
                $model->save();
                $this->redirect(array('index'));
            }
        }

        $this->render('contact', array(
            'model' => $model,
            'ms' => isset($ms['value4_text']) ? $ms['value4_text'] : ''
        ));
    }

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
     * 
     * @param type $file
     * @param type $model
     * @param type $job_id
     * @param type $employ_id
     * @return type
     */
    public function updateResume($file, $model, $job_id, $employ_id) {

        $file_tmp = CUploadedFile::getInstance($model, 'resume_id');
        $fileName = uniqid(time()) . $job_id . $file_tmp;

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
            $resume = new JobResumes;
            $resume->employ_id = $employ_id;
            $resume->job_id = $job_id;
            $resume->file_id = $file_id;
            $resume->save();
            return $resume->resume_id;
        }
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

            $file_tmp = CUploadedFile::getInstance($model, 'cover_id');
            $fileName = uniqid(time()) . $job_id . $file_tmp;

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
        $resume->value = $file['CandidateCoverNote'];
        $resume->type = $type;
        $resume->save();
        return $resume->cover_id;
    }

    public function actionRegister() {
        $model = new JobEmployees;
        if (isset($_GET['job']) && !empty($_GET['job'])) {
            $job = Jobs::model()->findByPk($_GET['job']);
            if (isset($_POST['JobEmployees']) && $_POST['JobEmployees']) {


                //update and upload file cover not
                $model->attributes = $_POST['JobEmployees'];
                $model->resume_id = 0;
                $model->save();
                //upload file and upload resume

                $model->resume_id = $this->updateResume($_POST['JobEmployees']['resume_id'], $model, $_GET['job'], $model->employ_id);
                //cover leter
                $type = $_POST['JobEmployees']['coverNoteType'];
                $model->cover_id = $this->updateJobCovers($_POST['JobEmployees'], $model, $_GET['job'], $model->employ_id, $type);
                // reupdate 
                $model->updateAll(
                        array('resume_id' => $model->resume_id, 'cover_id' => $model->cover_id), 'employ_id =' . $model->employ_id
                );
            }
        } else {
            $this->redirect('index');
        }

        $this->render('register', array('model' => $model, 'job' => $job));
    }

    public function actionTeamsDetail($id) {
        $models = Yii::app()->db->createCommand()
                ->select('teams.*,files.*')
                ->from('tbl_job_teams teams')
                ->where("teams_id = '$id'")
                ->leftJoin('tbl_job_files files', 'files.file_id = teams.image_id');
        $team = $models->queryRow();
        $this->render('teams_detail', array('team' => $team));
    }

    public function actionTestimonials() {
        //paginator

        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        $criteria = new CDbCriteria();
        $item_count = JobTestimonials::model()->count($criteria);
        $pages = new CPagination($item_count);
        $pages->pageSize = 5;

        $pages->applyLimit($criteria);
        $models = Yii::app()->db->createCommand()
                ->select('testimonials.*,files.*')
                ->from('tbl_job_testimonials testimonials')
                ->limit(Yii::app()->params['listPerPage'], $page - 1)
                ->leftJoin('tbl_job_files files', 'files.file_id = testimonials.image_id');
        $data = $models->queryAll();
        $this->render('testimonials', array(
            'data' => $data,
            'page_size' => Yii::app()->params['listPerPage'],
            'item_count' => $item_count,
            'pages' => $pages
        ));
    }
    public function actionDynamicsubCategories() {
        $data=  JobSubcategories::model()->findAll('parent=:parent_id', 
           array(':parent_id'=>(int) $_POST['cat_id']));
 
        $data=CHtml::listData($data,'id','cat_id');
        echo "<option value=''>All</option>";
            foreach($data as $value=>$id)
            {
                $name = JobCategories::model()->getCatName($id);
                echo CHtml::tag('option',
                           array('value'=>$value),CHtml::encode($name),true);
            }
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
