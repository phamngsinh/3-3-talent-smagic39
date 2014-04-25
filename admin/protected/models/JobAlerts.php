<?php

/**
 * This is the model class for table "tbl_job_alerts".
 *
 * The followings are the available columns in table 'tbl_job_alerts':
 * @property integer $alert_id
 * @property integer $employ_id
 * @property string $cat_id
 * @property integer $job_location_id
 * @property integer $worktype_id
 * @property integer $type
 */
class JobAlerts extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_alerts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('employ_id, type', 'numerical', 'integerOnly' => true),
            array('cat_id', 'length', 'max' => 100),
            array('job_location_id', 'length', 'max' => 100),
            array('worktype_id', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('alert_id, employ_id, cat_id, job_location_id, worktype_id, type', 'safe', 'on' => 'search'),
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
            'alert_id' => 'Alert',
            'employ_id' => 'Employ',
            'cat_id' => 'Cat',
            'job_location_id' => 'Job Location',
            'worktype_id' => 'Worktype',
            'type' => 'Type',
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

        $criteria->compare('alert_id', $this->alert_id);
        $criteria->compare('employ_id', $this->employ_id);
        $criteria->compare('cat_id', $this->cat_id, true);
        $criteria->compare('job_location_id', $this->job_location_id);
        $criteria->compare('worktype_id', $this->worktype_id);
        $criteria->compare('type', $this->type);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JobAlerts the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
