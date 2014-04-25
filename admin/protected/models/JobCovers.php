<?php

/**
 * This is the model class for table "tbl_job_covers".
 *
 * The followings are the available columns in table 'tbl_job_covers':
 * @property integer $cover_id
 * @property integer $employ_id
 * @property integer $job_id
 * @property string $type
 * @property string $value
 */
class JobCovers extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_covers';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('employ_id, job_id, type', 'required'),
//            array('value', 'required','message'=>'Please enter a value for Cover Note'),
            array('employ_id, job_id', 'numerical', 'integerOnly' => true),
            array('type', 'length', 'max' => 100),
            array('value', 'length', 'max' => 200),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cover_id, employ_id, job_id, type, value', 'safe', 'on' => 'search'),
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
            'cover_id' => 'Cover',
            'employ_id' => 'Employ',
            'job_id' => 'Job',
            'type' => 'Type',
            'value' => 'Value',
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

        $criteria->compare('cover_id', $this->cover_id);
        $criteria->compare('employ_id', $this->employ_id);
        $criteria->compare('job_id', $this->job_id);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('value', $this->value, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JobCovers the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
