<?php

/**
 * This is the model class for table "tbl_job_employees".
 *
 * The followings are the available columns in table 'tbl_job_employees':
 * @property integer $employ_id
 * @property string $full_name
 * @property string $email
 */
class JobEmployees extends CActiveRecord {

    public $idcategory;
    public $idsubcategory;
    public $job_title;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return JobEmployees the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_employees';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name,email,mobile', 'required'),
            array('email', 'email'),
            array('mobile,phone', 'length', 'max' => 100),
            array('experience', 'length', 'max' => 500),
            array('employ_id,job_title,idcategory,idsubcategory, first_name, last_name,email,mobile, experience', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'apply' => array(self::HAS_MANY, 'JobResumes', 'employ_id', 'on' => 'apply.type=1'),
            'alert' => array(self::HAS_MANY, 'JobAlerts', 'employ_id', 'on' => 'alert.type=1'),
            'cv' => array(self::HAS_MANY, 'JobResumes', 'employ_id', 'on' => 'cv.type=2'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'job_title' => 'Job Title',
            'idcategory' => 'Category',
            'idsubcategory' => 'SubCategory',
            'employ_id' => 'Employ',
            'cover_note_id' => 'Cover note',
            'resume_id' => 'Resume',
            'email' => 'Email address',
            'first_name' => 'First name',
            'linkedin_profile' => 'LinkedIn Profile URL',
            'last_name' => 'Last name',
            'phone' => 'Phone ',
            'mobile' => 'Mobile',
            'experience' => 'Experience',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('employ_id', $this->employ_id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);


        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function search_apply() {
        $criteria = new CDbCriteria;
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
        if (isset($_GET['JobEmployees']) && $_GET['JobEmployees']['employ_id']) {
            $criteria->condition = 'JobResumes.type=1 AND JobEmployees.employ_id =' . $_GET['JobEmployees']['employ_id'];
        } else {
            $criteria->condition = 'JobResumes.type=1';
        }

        ///search job titel
        if (isset($_GET['JobEmployees']) && ($_GET['JobEmployees']['job_title'])) {
            $criteria->addCondition('JobResumes.job_id =' . $this->getJobTitle($_GET['JobEmployees']['job_title']));
        }

        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);

        return new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
    }

    /**
     * 
     * @param type $title
     * @return type
     */
    public function getJobTitle($title) {

        $data_tmp = Jobs::model()->find("title = '$title'"); //return id
        return $data_tmp['job_id'];
    }

    /**
     * 
     * @param type $employ_id
     */
    public function getJobTitleByEmployee($employ_id) {
        $criteria = new CDbCriteria;
        $criteria->alias = 'Jobs';
        $criteria->select = 'Jobs.title';
        $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.job_id = Jobs.job_id ';
        $criteria->condition = 'JobResumes.type=1 AND JobResumes.employ_id =' . $employ_id;
        $data = Jobs::model()->find($criteria);
        return !empty($data['title']) ? $data['title'] : '';
    }

    /**
     * 
     * @return \CActiveDataProvider
     */
    public function search_alert() {

        $criteria = new CDbCriteria;
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN  tbl_job_alerts  as JobAlerts ON JobAlerts.employ_id = JobEmployees.employ_id ';
        if (isset($_GET['JobEmployees']) && $_GET['JobEmployees']['employ_id']) {
            $criteria->condition = 'JobAlerts.type=1 AND JobEmployees.employ_id =' . $_GET['JobEmployees']['employ_id'];
        } else {
            $criteria->condition = 'JobAlerts.type=1';
        }
        
           if (isset($_GET['JobEmployees']) && ($_GET['JobEmployees']['idcategory'] || $_GET['JobEmployees']['idsubcategory'])) {

            if ($_GET['JobEmployees']['idcategory']) {
                $criteria->addCondition('JobAlerts.id_category =' . $this->getIdCategory($_GET['JobEmployees']['idcategory']));
            }
            if ($_GET['JobEmployees']['idsubcategory']) {
                $criteria->addCondition('JobAlerts.id_subcategories =' . $this->getIdCategory($_GET['JobEmployees']['idsubcategory']));
            }
        }

        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);

        return new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
    }

    public function search_regCv() {

        $criteria = new CDbCriteria;
        $criteria->select = 'JobEmployees.*,JobResumes.*';
        $criteria->alias = 'JobEmployees';
        $criteria->join = 'LEFT JOIN tbl_job_resumes as JobResumes ON JobResumes.employ_id = JobEmployees.employ_id ';
        if (isset($_GET['JobEmployees']) && $_GET['JobEmployees']['employ_id']) {
            $criteria->condition = 'JobResumes.type=2 AND JobEmployees.employ_id =' . $_GET['JobEmployees']['employ_id'];
        } else {
            $criteria->condition = 'JobResumes.type=2';
        }
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);
        if (isset($_GET['JobEmployees']) && ($_GET['JobEmployees']['idcategory'] || $_GET['JobEmployees']['idsubcategory'])) {

            if ($_GET['JobEmployees']['idcategory']) {
                $criteria->addCondition('JobResumes.id_category =' . $this->getIdCategory($_GET['JobEmployees']['idcategory']));
            }
            if ($_GET['JobEmployees']['idsubcategory']) {
                $criteria->addCondition('JobResumes.id_subcategories =' . $this->getIdCategory($_GET['JobEmployees']['idsubcategory']));
            }
        }
        return new CActiveDataProvider('JobEmployees', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 25,
            ),
        ));
    }

    public function getIdCategory($cat_name) {
        $data_tmp = JobCategories::model()->find("cat_name = '$cat_name'"); //return id
        return $data_tmp['cat_id'];
    }

}
