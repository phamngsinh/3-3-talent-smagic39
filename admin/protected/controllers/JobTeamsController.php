<?php

class JobTeamsController extends Controller
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
		$model=new JobTeams;
                
                $files = new Files;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['JobTeams']))
		{
			$model->attributes=$_POST['JobTeams'];
                        $file_tmp = CUploadedFile::getInstance($model, 'image_id');
                        $fileName = uniqid(time()) . $file_tmp;
                        unset($model->image_id);
                        if ($model->save()) {
                            $uri = '';
                            $file_id = '';
                            if ($file_tmp && is_object($file_tmp) && get_class($file_tmp) === 'CUploadedFile') {
                                $file_tmp->saveAs(Yii::app()->basePath . '/../uploads/files/' . $fileName);
                                $uri = 'uploads/files/' . $fileName;
                                $command = Yii::app()->db->createCommand();
                                $command->insert('tbl_job_files', array(
                                    'uri' => $uri,
                                    'timestamp' => date('Y-m-d H:i:s', time()),
                                ));
                                $command->execute();
                                $file_id = Yii::app()->db->getLastInsertID();
                            }

                            $model->teams_id = $model->teams_id;
                            $model->image_id = $file_id;
                            $model->save();
                        }
			$this->redirect(array('view','id'=>$model->teams_id));
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
                $files = new Files;
		$model=$this->loadModel($id);
                $files_current = $files->findByPk($model->image_id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                $file_tmp = CUploadedFile::getInstance($model, 'image_id');
                $fileName = uniqid(time()) . $file_tmp;
                
		if(isset($_POST['JobTeams']))
		{
			$model->attributes=$_POST['JobTeams'];
                        unset($model->image_id);
			if ($model->save()) {
                            if ($file_tmp && is_object($file_tmp) && get_class($file_tmp) === 'CUploadedFile') {

                                $file_tmp->saveAs(Yii::app()->basePath . '/../uploads/files/' . $fileName);
                                //update file
                                if (!empty($files_current)) {

                                    $file = new Files;
                                    $file->file_id = $model->image_id;
                                    $file->uri = 'uploads/files/' . $fileName;
                                    $file->timestamp = date('Y-m-d H:i:s', time());
                                    $file->save();
                                } else {
                                    //create new file
                                    $command = Yii::app()->db->createCommand();
                                    $command->insert('tbl_job_files', array(
                                        'uri' => 'uploads/files/' . $fileName,
                                        'timestamp' => date('Y-m-d H:i:s', time()),
                                    ));
                                    $command->execute();

                                    $model->image_id = Yii::app()->db->getLastInsertID();
                                    $model->teams_id = $id;
                                    $model->save();
                                }
                            }
                        }
                    $this->redirect(array('view','id'=>$model->teams_id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'files' => isset($files_current) ? $files_current : null
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
		$dataProvider=new CActiveDataProvider('JobTeams');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JobTeams('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JobTeams']))
			$model->attributes=$_GET['JobTeams'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return JobTeams the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=JobTeams::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param JobTeams $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='job-teams-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
