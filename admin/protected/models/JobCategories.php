<?php

/**
 * This is the model class for table "tbl_job_categories".
 *
 * The followings are the available columns in table 'tbl_job_categories':
 * @property integer $cat_id
 * @property string $cat_name
 */
class JobCategories extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_categories';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cat_name', 'required'),
            array('cat_name', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cat_id, cat_name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'subCategories' => array(self::MANY_MANY, 'JobSubCategories', 'cat_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'cat_id' => 'ID',
            'cat_name' => 'Categories Name',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('cat_id', $this->cat_id);
        $criteria->compare('cat_name', $this->cat_name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JobCategories the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getCatName($id) {
        $cat_name = JobCategories::model()->findByPk($id);
        return !empty($cat_name->cat_name) ? $cat_name->cat_name : '';
    }
    public function getParent($id){
        $sub = JobSubCategories::model()->find(array('condition' => "cat_id = $id"));
        if ($sub) {
            $parent_sub = JobCategories::model()->find(array('condition' => "cat_id = " . $sub['parent']));
        }
        return  $parent_sub ? $parent_sub['cat_name'] : '';

    }
    public function getListNameOfUser($id){


       $data_tmp =  JobAlerts::model()->find('employ_id ='.$id);
       $list_tmp = explode('|',$data_tmp['cat_id']);
       $list = implode(',',$list_tmp);

        $criteria  = new CDbCriteria();
        $criteria->select  = 'cat_name';
        $criteria->condition = 'cat_id in ('.$list.')';

       $data = JobCategories::model()->findAll($criteria);
        $list_data = '';
        foreach($data as  $key){
            $list_data .= $key['cat_name'].',';
        }
        return $list_data;
    }



}
