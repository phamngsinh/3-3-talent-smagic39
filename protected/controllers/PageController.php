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
        $item_count = Jobs::model()->count($criteria);

        $pages = new CPagination($item_count);
        $pages->setPageSize(Yii::app()->params['listPerPage']);
        $pages->applyLimit($criteria);  // the trick is here!
        $this->render('index', array(
            'dataProvider' => Jobs::model()->findAll($criteria),
            'item_count' => $item_count,
            'page_size' => Yii::app()->params['listPerPage'],
            'pages' => $pages,
        ));
    }

    public function actionView($id) {
        $model = Jobs::model()->findByPk($id);
        $this->render('view_job_detail', array(
            'job' => $model,
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
        $dataProvider = new CActiveDataProvider('JobTeams', array(
            'pagination' => array(
                'pageSize' => 8,
            ),
        ));
        $this->render('teams', array(
            'dataProvider' => $dataProvider,
        ));
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
