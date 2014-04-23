<?php

class JobEmployeesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'apply', 'alert', 'regCv'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{       
//                $files = new Files();
                $model = $this->loadModel($id);
//                $resume = JobResumes::model()->find('employ_id=:emp', array(':emp'=>$model->employ_id));
//                $covers = JobCovers::model()->find('employ_id=:cover', array(':cover'=>$model->employ_id));
//                $files_current = '';
//                $files_covers = '';
//                if($resume) {
//                    foreach ($resume as $res) {
//                        $files_current = $files->findByPk($res->file_id);
//                    }
//                }
//                if($covers) {
//                    foreach ($covers as $cos) {
//                        $files_covers = $files->findByPk($cos->value);
//                    }
//                }
		$this->render('view',array(
			'model'=>$model,
//			'resume'=>$files_current,
//			'covers'=>$files_covers,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new JobEmployees;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['JobEmployees']))
		{
			$model->attributes=$_POST['JobEmployees'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->employ_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['JobEmployees']))
		{
			$model->attributes=$_POST['JobEmployees'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->employ_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('JobEmployees');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionApply() 
        {
            $dataProvider=new CActiveDataProvider('JobEmployees',array(
                                        'criteria'=>array(
                                            'with'=>array('apply')
                                   )));
            $this->render('apply', array(
                'model' => $dataProvider,
            ));
        }
        public function actionAlert() 
        {
            $dataProvider=new CActiveDataProvider('JobEmployees',array(
                                        'criteria'=>array(
                                            'with'=>array('alert')
                                   )));
            $this->render('apply', array(
                'model' => $dataProvider,
            ));
        }
        public function actionRegCv() 
        {
            $dataProvider=new CActiveDataProvider('JobEmployees',array(
                                        'criteria'=>array(
                                            'with'=>array('cv')
                                   )));
            $this->render('apply', array(
                'model' => $dataProvider,
            ));
        }

        /**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JobEmployees('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JobEmployees']))
			$model->attributes=$_GET['JobEmployees'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return JobEmployees the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=JobEmployees::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param JobEmployees $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='job-employees-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
