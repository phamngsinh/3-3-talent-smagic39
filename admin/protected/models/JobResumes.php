<?php

/**
 * This is the model class for table "tbl_job_resumes".
 *
 * The followings are the available columns in table 'tbl_job_resumes':
 * @property integer $resume_id
 * @property integer $employ_id
 * @property integer $job_id
 * @property integer $file_id
 * @property string $coverletter
 */
class JobResumes extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return JobResumes the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_resumes';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('employ_id, job_id, file_id', 'required'),
            array('employ_id, job_id', 'numerical', 'integerOnly' => true),
            array('file_id', 'required', 'message' => 'Please enter a value for Resume'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('resume_id, employ_id,id_category,id_subcategories, job_id, file_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_category' => 'Category',
            'id_subcategories' => 'Subcategory',
            'resume_id' => 'Resume',
            'employ_id' => 'Employ',
            'job_id' => 'Job',
            'file_id' => 'File',
            'lastest'=>'Lastest of Update',
            'type'=>'Apply/Register',
            'confirm_apply'=>'',
            'confirm_register'=>'',
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

        $criteria->compare('resume_id', $this->resume_id);
        $criteria->compare('employ_id', $this->employ_id);
        $criteria->compare('job_id', $this->job_id);
        $criteria->compare('file_id', $this->file_id);
        $criteria->compare('coverletter', $this->coverletter, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function getAppliccation($id) {
        $criteria=new CDbCriteria;
         $criteria->select = 'job_id';
        $criteria->condition='job_id=:jobId';
        $criteria->params = array(':jobId'=>$id);
        $data= JobResumes::model()->count($criteria);
        return $data;
    }
        public static function getLastestApplication($id) {
        $criteria=new CDbCriteria;
         $criteria->select = 'lastest';
        $criteria->condition='job_id=:jobId AND type=1';
        $criteria->order = 'lastest DESC';
        $criteria->limit = 1;
        $criteria->params = array(':jobId'=>$id);
        $data= JobResumes::model()->findAll($criteria);
        return $data ? $data[0]['lastest'] :'';
    }
    public static  function getCategory($employ_id,$type_cat,$type=2){

        $data_tmp = JobResumes::model()->find('employ_id=:employ_id AND type=:type',array(':employ_id'=>$employ_id,':type'=>$type));
        $cat_id = ($type_cat==1) ? $data_tmp['id_category']: $data_tmp['id_subcategories'] ;
        $data = JobCategories::model()->findByPk($cat_id);
        return $data['cat_name'] ? $data['cat_name'] : 'Null' ;

    }


}
