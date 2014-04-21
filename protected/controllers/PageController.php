<?php

include("./admin/protected/models/Jobs.php");
include("./admin/protected/models/JobLocation.php");
include("./admin/protected/models/JobWorktype.php");
include("./admin/protected/models/JobTeams.php");
include("./admin/protected/models/JobTestimonials.php");
include("./admin/protected/models/JobContactus.php");
include("./admin/protected/models/JobAbout.php");
class PageController extends Controller
{
        public function actions()
        {
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
	public function actionIndex()
	{
                // implement jobs board
                $criteria = new CDbCriteria();
                $item_count = Jobs::model()->count($criteria);

                $pages = new CPagination($item_count);
                $pages->setPageSize(Yii::app()->params['listPerPage']);
                $pages->applyLimit($criteria);  // the trick is here!
		$this->render('index', array(
                          'dataProvider'=>Jobs::model()->findAll($criteria),
                          'item_count'=>$item_count,
                          'page_size'=>Yii::app()->params['listPerPage'],
                          'pages'=>$pages,
                ));
	}
        public function actionView($id) {
            $model = Jobs::model()->findByPk($id);
            $this->render('view_job_detail', array(
                    'job'=>$model,
            ));
        }
        
        public function actionApply($id) {
            $this->render('apply_job', array(
                
            ));
        }

                public function actionAbout()
	{
                $dataProvider= new CActiveDataProvider('JobAbout', array(
                        'pagination'=>array(
                          'pageSize'=>8,
                        ),
                ));
		$this->render('about', array(
                        'dataProvider' => $dataProvider,
                ));
	}
	public function actionContact()
	{
		$this->render('contact');
	}
	public function actionTeams()
	{       
                $dataProvider= new CActiveDataProvider('JobTeams', array(
                        'pagination'=>array(
                          'pageSize'=>8,
                        ),
                ));
		$this->render('teams', array(
                        'dataProvider' => $dataProvider,
                ));
	}
	public function actionTestimonials()
	{
                $dataProvider= new CActiveDataProvider('JobTestimonials', array(
                        'pagination'=>array(
                          'pageSize'=>8,
                        ),
                ));
		$this->render('testimonials', array(
                        'dataProvider' => $dataProvider,
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