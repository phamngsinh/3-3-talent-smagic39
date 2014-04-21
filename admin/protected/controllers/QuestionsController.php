<?php

class QuestionsController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
	return array(
	    'accessControl', // perform access control for CRUD operations
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
	    array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view'),
		'users' => array('*'),
	    ),
	    array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('create', 'update'),
		'users' => array('@'),
	    ),
	    array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'delete'),
		'users' => array('admin'),
	    ),
	    array('deny', // deny all users
		'users' => array('*'),
	    ),
	);
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
	$this->render('view', array(
	    'model' => $this->loadModel($id),
	));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
	$model = new Questions;

	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if (isset($_POST['Questions']))
	{
	    $model->attributes = $_POST['Questions'];
	    if ($model->save())
		$this->redirect(array('update', 'id' => $model->id));
	}

	$this->render('create', array(
	    'model' => $model
	));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id,$delid='')
    {
	$model = $this->loadModel($id);

	if (isset($delid) and $delid!='')
	{
	    Yii::app()->user->setFlash('success', "Option deleted successfully!");
	    Options::model()->deleteByPk($delid);
	}



	if (isset($_POST['Questions']))
	{

	    $options = Options::model()->findAllByAttributes(array('question_id' => $model->id));

	    $i = 1;
	    foreach ($options as $option)
	    {
		$option = Options::model()->findByPk($option->id);
		$option->attributes = $_POST['Options'.$i];
		$option->question_id = $model->id;
		$option->score = $_POST['Options'.$i]['Score'];
		
		if($_POST['nowAnswer']==$option->id)
		{
		    $option->is_correct = 1;
		}
		else
		{
		    $option->is_correct = 0;
		}
		
		
		Yii::app()->user->setFlash('success', "Option updated successfully!");
		$option->save();
		$i++;
	    }


	    if (isset($_POST['OptionsNew']) and $_POST['OptionsNew']!='')
	    {
		$option = new Options();
		$option->option = $_POST['OptionsNew'];
		$option->score = $_POST['ScoreNew'];
		$option->question_id = $model->id;
		$option->is_correct = 0;
		Yii::app()->user->setFlash('success', "Option added successfully!");
		$option->save();
	    }


	    $model->attributes = $_POST['Questions'];
	    if ($model->save())
	    {
		$model->correct_answer = $_POST['nowAnswer'];
		$model->save();
		$this->redirect(array('update', 'id' => $model->id));
	    }
	}

	$this->render('update', array(
	    'model' => $model,
	));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
	if (Yii::app()->request->isPostRequest)
	{
	    // we only allow deletion via POST request
	    $this->loadModel($id)->delete();
	    
	    Options::model()->deleteAllByAttributes(array("question_id"=>$id));
	    
	    // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
	    if (!isset($_GET['ajax']))
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	else
	    throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
	$dataProvider = new CActiveDataProvider('Questions');
	$this->render('index', array(
	    'dataProvider' => $dataProvider,
	));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
	$model = new Questions('search');
	$model->unsetAttributes();  // clear any default values
	if (isset($_GET['Questions']))
	    $model->attributes = $_GET['Questions'];

	$this->render('admin', array(
	    'model' => $model,
	));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
	$model = Questions::model()->findByPk($id);
	if ($model === null)
	    throw new CHttpException(404, 'The requested page does not exist.');
	return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
	if (isset($_POST['ajax']) && $_POST['ajax'] === 'questions-form')
	{
	    echo CActiveForm::validate($model);
	    Yii::app()->end();
	}
    }

}
