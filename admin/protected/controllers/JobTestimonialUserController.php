<?php

class JobTestimonialUserController extends Controller
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
				'actions'=>array('index','view','approved'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

	public function actionCreate()
	{
		$model=new JobTestimonialUser;
		$uploaded = false;
                $uri = 'No image';
                $dir = Yii::getPathOfAlias('application.uploads');
                if (isset($_POST['JobTestimonialUser'])) {
                    $model->attributes = $_POST['JobTestimonialUser'];

                    $file = CUploadedFile::getInstance($model, 'image');
                    if ($file && is_object($file) && get_class($file) === 'CUploadedFile') {
                        $fileName = uniqid(time()) . '.' . $file->getExtensionName();
                        $uploaded = $file->saveAs(Yii::getPathOfAlias('webroot').'/uploads/files/testimonials/' . $fileName); //boolean
                        $uri = 'uploads/files/testimonials/' . $fileName;
                    }
                    $model->image = $uri;
                    if ($model->validate()) {
                        if ($model->save()) {
                            Yii::app()->user->setFlash('success', "You have already added  your Testimonial with Us.");
                            $this->redirect(array('admin'));
                        }
                    }
                }
                $this->render('create', array(
                    'model' => $model,
                    'uploaded' => $uploaded,
                    'dir' => $dir,
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
                
		$uploaded = false;
                $uri = 'No image';
                $dir = Yii::getPathOfAlias('application.uploads');
                if (isset($_POST['JobTestimonialUser'])) {
                    $model->attributes = $_POST['JobTestimonialUser'];

                    $file = CUploadedFile::getInstance($model, 'image');
                    if ($file && is_object($file) && get_class($file) === 'CUploadedFile') {
                        $fileName = uniqid(time()) . '.' . $file->getExtensionName();
                        $uploaded = $file->saveAs(Yii::app()->basePath . '/uploads/files/testimonials/' . $fileName); //boolean
                        $uri = 'uploads/files/testimonials/' . $fileName;
                    }
                    if(empty($file)){
                            $fileNameCurrent = $_POST['JobTestimonialUser']['image_hidden'];
                            $model->image = $fileNameCurrent;
                        } else {
                            $model->image = $uri;
                        }
                    if($model->save())
                        if(!empty($file)){
                                    $uploaded->saveAs(Yii::app()->basePath.'/uploads/files/testimonials/'.$fileName);
                        }
			$this->redirect(array('view','id'=>$model->testimonial_user_id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'uploaded' => $uploaded,
                        'dir' => $dir,
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
        public function actionApproved($id)
	{
            $this->layout = false;
            JobTestimonialUser::model()->updateByPk($id,array('approved'=>1));
            $model=$this->loadModel($id);
            $this->redirect(array('view','id'=>$id));
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('JobTestimonialUser');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JobTestimonialUser('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JobTestimonialUser']))
			$model->attributes=$_GET['JobTestimonialUser'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return JobTestimonialUser the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=JobTestimonialUser::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param JobTestimonialUser $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='job-testimonial-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
