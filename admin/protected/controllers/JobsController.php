<?php

class JobsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
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
    public function actionView($id) {
        $employee = Yii::app()->db->createCommand()
                ->select('JobEmployees.*,JobResumes.*,Files.*')
                ->from('tbl_job_employees JobEmployees')
                ->join('tbl_job_resumes JobResumes', 'JobResumes.employ_id=JobEmployees.employ_id')
                ->join('tbl_job_files Files', 'Files.file_id=JobResumes.file_id')
                ->where('JobResumes.job_id=:id AND JobResumes.type = 1', array(':id' => $id))
                ->queryAll();
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'employee'=> $employee 
        ));
    }

    public function sendMailer() {
        $ms_email = Ms::model()->findByAttributes(array('var_name' => 'adminEmail'))->value4_text;
        $mail = new YiiMailer();
        print_r(Yii::app()->params['adminEmail']);
        exit;
        $mail->setFrom($ms_email, 'Admin');
        $mail->setTo(Yii::app()->params['adminEmail']);
        $mail->setSubject('Mail subject');
        $mail->setBody('Simple message');
        $mail->send();
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Jobs;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $categories_dropdown = CHtml::ListData(JobCategories::model()->findAll(), 'cat_id', 'cat_name');
        $jobLocation_dropdown = CHtml::ListData(JobLocation::model()->findAll('city IS NOT NULL GROUP BY city'), 'job_location_id', 'city');
        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');
        if (isset($_POST['Jobs'])) {
            $model->attributes = $_POST['Jobs'];
//			$model->save();
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->job_id));
        }

        $this->render('create', array(
            'model' => $model,
            'categories' => $categories_dropdown,
            'location' => $jobLocation_dropdown,
            'worktype' => $worktype,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $categories_dropdown = CHtml::ListData(JobCategories::model()->findAll(), 'cat_id', 'cat_name');
        $jobLocation_dropdown = CHtml::ListData(JobLocation::model()->findAll('city IS NOT NULL GROUP BY city'), 'job_location_id', 'city');

        $worktype = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');
        if (isset($_POST['Jobs'])) {
            $model->attributes = $_POST['Jobs'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->job_id));
        }

        $this->render('update', array(
            'model' => $model,
            'categories' => $categories_dropdown,
            'location' => $jobLocation_dropdown,
            'worktype' => $worktype,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        /*
         * delete relation with job
         */
        $employees_apply = new JobResumes();
        if($this->loadModel($id)->delete()) {
            if($employees_apply) {
                 $employees_apply->deleteAll('job_id=:id AND type=:type', array(':id'=>$id, ':type'=>1));
            }
        }

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Jobs');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Jobs('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Jobs']))
            $model->attributes = $_GET['Jobs'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Jobs the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Jobs::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Jobs $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'jobs-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
