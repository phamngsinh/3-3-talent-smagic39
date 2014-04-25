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
            array('mobile,phone', 'length', 'max' => 100),
            array('email', 'email'),
            array('employ_id, first_name, last_name,email,mobile', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'employ_id' => 'Employ',
            'cover_note_id' => 'Cover note',
            'resume_id' => 'Resume',
            'email' => 'Email address',
            'first_name' => 'First name',
            'linkedin_profile' => 'LinkedIn Profile URL',
            'last_name' => 'Last name',
            'phone' => 'Phone ',
            'mobile' => 'Mobile',
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
        $criteria->compare('first_name', $this->full_name, true);
        $criteria->compare('last_name', $this->full_name, true);
        $criteria->compare('email', $this->email, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
