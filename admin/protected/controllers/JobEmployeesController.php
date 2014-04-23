<?php

class JobEmployeesController extends Controller {

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
                'actions' => array('admin', 'delete', 'apply', 'alert', 'regCv'),
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
//        $criteria = new CDbCriteria;
//        $criteria->alias = 'JobEmployees';
//        switch ($_GET['type']) {
//            case 'regcv':
//                $criteria->select = 'JobEmployees.*,JobResumes.*';
//                $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
//                $criteria->condition = 'JobResumes.type="2" AND JobEmployees.employ_id=' . $id;
//                $criteria->together = true;
//                break;
//            case 'apply':
//                $criteria->select = 'JobEmployees.*,JobResumes.*';
//                $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
//                $criteria->condition = 'JobResumes.type="1" AND JobEmployees.employ_id=' . $id;
//                break;
//            case 'alert':
//                $criteria->join = 'LEFT JOIN  tbl_job_alerts  as JobAlerts ON JobAlerts.employ_id = JobEmployees.employ_id ';
//                $criteria->condition = 'JobAlerts.type = "1" AND JobEmployees.employ_id=' . $id;
//                break;
//            default:
//                break;
//        }
//        $model = JobEmployees::model()->findAll($criteria);
//        $model = new CActiveDataProvider('JobEmployees', array(
//            'criteria' => $criteria,
//        ));
        switch ($_GET['type']) {
            case 'regcv':
                $employee = Yii::app()->db->createCommand()
                        ->select('JobEmployees.*,JobResumes.*,Files.*,Jobs.*')
                        ->from('tbl_job_employees JobEmployees')
                        ->join('tbl_job_resumes JobResumes', 'JobResumes.employ_id=JobEmployees.employ_id')
                        ->join('tbl_job_files Files', 'Files.file_id=JobResumes.file_id')
                        ->join('tbl_jobs Jobs', 'Jobs.job_id=JobResumes.job_id')
                        ->where('JobEmployees.employ_id=:id AND JobResumes.type = 2', array(':id' => $id))
                        ->queryAll();
                break;
            case 'apply':
                $employee = Yii::app()->db->createCommand()
                        ->select('JobEmployees.*,JobResumes.*,Files.*,Jobs.*')
                        ->from('tbl_job_employees JobEmployees')
                        ->join('tbl_job_resumes JobResumes', 'JobResumes.employ_id=JobEmployees.employ_id')
                        ->join('tbl_job_files Files', 'Files.file_id=JobResumes.file_id')
                        ->join('tbl_jobs Jobs', 'Jobs.job_id=JobResumes.job_id')
                        ->where('JobEmployees.employ_id=:id AND JobResumes.type = 1', array(':id' => $id))
                        ->queryAll();
                break;
            case 'alert':
                $employee = Yii::app()->db->createCommand()
                        ->select('JobEmployees.*,JobAlerts.*')
                        ->from('tbl_job_employees JobEmployees')
                        ->join('tbl_job_alerts JobAlerts', 'JobAlerts.employ_id=JobEmployees.employ_id')
                        ->where('JobEmployees.employ_id=:id AND JobAlerts.type = 1', array(':id' => $id))
                        ->queryAll();
                break;
            default:
                break;
        }


        $model = $this->loadModel($id);
        $this->render('view', array(
            'type_view' => $_GET['type'],
            'model' => $model,
            'employee' => $employee
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new JobEmployees;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['JobEmployees'])) {
            $model->attributes = $_POST['JobEmployees'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->employ_id));
        }

        $this->render('create', array(
            'model' => $model,
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

        if (isset($_POST['JobEmployees'])) {
            $model->attributes = $_POST['JobEmployees'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->employ_id));
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
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('JobEmployees');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionApply() {
        $criteria = new CDbCriteria;
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
        $criteria->condition = 'JobResumes.type=1';
        $dataProvider = new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
        $this->render('apply', array(
            'type_view' => 'apply',
            'type' => 'Apply Jobs',
            'model' => $dataProvider,
        ));
    }

    public function actionAlert() {
        $criteria = new CDbCriteria;
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN  tbl_job_alerts  as JobAlerts ON JobAlerts.employ_id = JobEmployees.employ_id ';
        $criteria->condition = 'JobAlerts.type=1';
        $dataProvider = new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
        $this->render('apply', array(
            'type_view' => 'alert',
            'type' => 'Sign Up for Job Alerts',
            'model' => $dataProvider,
        ));
    }

    public function actionRegCv() {
        $criteria = new CDbCriteria;
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
        $criteria->condition = 'JobResumes.type=2';
        $dataProvider = new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
        $this->render('apply', array(
            'type_view' => 'regcv',
            'type' => 'Register  CVs',
            'model' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new JobEmployees('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['JobEmployees']))
            $model->attributes = $_GET['JobEmployees'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return JobEmployees the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = JobEmployees::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param JobEmployees $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'job-employees-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
