<?php

class JobCategoriesController extends Controller {

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
        $sub = JobSubCategories::model()->find(array('condition' => "cat_id = $id"));
        $parent_sub = '';
        if ($sub) {
            $parent_sub = JobCategories::model()->find(array('condition' => "cat_id = " . $sub['parent']));
        }
        //get al list job
        $job_list = new CActiveDataProvider('Jobs', array('criteria' => array(
                'condition' => 'cat_id=' . $id
        )));
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'parent_name' => $parent_sub ? $parent_sub['cat_name'] : '',
            'job_list' => $job_list
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new JobCategories;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $criteria = new CDbCriteria();
        $criteria->select = 't.*';
        $criteria->condition = 'JobSubcategories.parent=0';
        $criteria->join = ' LEFT JOIN tbl_job_subcategories as  JobSubcategories ON  JobSubcategories.cat_id = t.cat_id ';
        $tmp_cat_parent = JobCategories::model()->findAll($criteria);

        if (isset($_POST['JobCategories'])) {
            $model->attributes = $_POST['JobCategories'];
            if ($model->save()) {
                // create sub cateogries
                $sub_cat = new JobSubcategories();
                $sub_cat->cat_id = $model->cat_id;
                $sub_cat->parent = $_POST['JobCategories']['cat_id'] ? $_POST['JobCategories']['cat_id'] : 0;
                $sub_cat->save();
                Yii::app()->user->setFlash('success', "New Category is created");
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'tmp_cat_parent' => $tmp_cat_parent
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $criteria = new CDbCriteria();
        $criteria->select = 't.*';
        $criteria->condition = 't.cat_id !=' . $id;
        $criteria->join = ' LEFT JOIN tbl_job_subcategories as  JobSubcategories ON  JobSubcategories.cat_id = t.cat_id ';
        $tmp_cat_parent = JobCategories::model()->findAll($criteria);
        $parent = JobSubcategories::model()->find('cat_id=' . $id);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['JobCategories'])) {
            $subcat = JobSubcategories::model()->findByPk($parent['id']);
            $subcat->parent = $_POST['JobCategories']['cat_id'];


            $model->cat_id = $id;
            $model->cat_name = $_POST['JobCategories']['cat_name'];
            if ($model->save()) {
                $subcat->save();
                $this->redirect(array('view', 'id' => $id));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'parent' => $parent ? $parent['parent'] : '',
            'tmp_cat_parent' => $tmp_cat_parent,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $sub_cat = JobSubCategories::model()->find('cat_id=:id', array(':id'=>$id));
        $sub_cat_parent = JobSubCategories::model()->find('parent=:id', array(':id'=>$id));
        if($this->loadModel($id)->delete()) {
            if($sub_cat) {
                $sub_cat->delete();
            }
            if($sub_cat_parent) {
                JobSubCategories::model()->updateByPk($sub_cat_parent->id, array('parent'=>0));
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
        $dataProvider = new CActiveDataProvider('JobCategories');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new JobCategories('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['JobCategories']))
            $model->attributes = $_GET['JobCategories'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return JobCategories the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = JobCategories::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param JobCategories $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'job-categories-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    function  gridParentCategories($data,$row){
        return JobCategories::model()->getParent($data->cat_id);
    }


}
