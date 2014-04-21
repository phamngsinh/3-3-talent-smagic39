<?php

/**
 * This is the model base class for the table "tbl_test".
 *
 * Columns in table "tbl_test" available as properties of the model:
 
      * @property integer $id
      * @property string $name
      * @property string $email
      * @property integer $age
      * @property string $gender
      * @property string $city
      * @property string $country
      * @property string $nric
      * @property string $mobile_number
      * @property string $landline_number
      * @property string $timezone
      * @property string $url
      * @property integer $visits
      * @property string $last_login
      * @property integer $is_active
      * @property string $userid
      * @property string $username
      * @property string $password
      * @property string $first_name
      * @property string $last_name
      * @property string $location
      * @property string $dob
      * @property string $title
      * @property string $role
      * @property integer $is_internal
      * @property string $full_details
 *
 * There are no model relations.
 */
abstract class BaseTest extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_test';
    }

    public function rules() {
        return array(
            array('title, role, full_details', 'required'),
            array('name, email, age, gender, city, country, nric, mobile_number, landline_number, timezone, url, visits, last_login, is_active, userid, username, password, first_name, last_name, location, dob', 'default', 'setOnEmpty' => true, 'value' => null),
            array('age, visits, is_active, is_internal', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('url', 'url'),
            array('name, email, city, userid, username, first_name, last_name, location', 'length', 'max' => 200),
            array('gender, mobile_number, landline_number', 'length', 'max' => 20),
            array('country, password, title, role', 'length', 'max' => 100),
            array('nric', 'length', 'max' => 15),
            array('timezone', 'length', 'max' => 10),
            array('url, last_login, dob', 'safe'),
            array('id, name, email, age, gender, city, country, nric, mobile_number, landline_number, timezone, url, visits, last_login, is_active, userid, username, password, first_name, last_name, location, dob, title, role, is_internal, full_details', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->name;
    }

    public function behaviors() {
        return array();
    }

    public function relations() {
        return array(
        );
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'age' => Yii::t('app', 'Age'),
            'gender' => Yii::t('app', 'Gender'),
            'city' => Yii::t('app', 'City'),
            'country' => Yii::t('app', 'Country'),
            'nric' => Yii::t('app', 'Nric'),
            'mobile_number' => Yii::t('app', 'Mobile Number'),
            'landline_number' => Yii::t('app', 'Landline Number'),
            'timezone' => Yii::t('app', 'Timezone'),
            'url' => Yii::t('app', 'Url'),
            'visits' => Yii::t('app', 'Visits'),
            'last_login' => Yii::t('app', 'Last Login'),
            'is_active' => Yii::t('app', 'Is Active'),
            'userid' => Yii::t('app', 'Userid'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'location' => Yii::t('app', 'Location'),
            'dob' => Yii::t('app', 'Dob'),
            'title' => Yii::t('app', 'Title'),
            'role' => Yii::t('app', 'Role'),
            'is_internal' => Yii::t('app', 'Is Internal'),
            'full_details' => Yii::t('app', 'Full Details'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('age', $this->age);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('nric', $this->nric, true);
        $criteria->compare('mobile_number', $this->mobile_number, true);
        $criteria->compare('landline_number', $this->landline_number, true);
        $criteria->compare('timezone', $this->timezone, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('visits', $this->visits);
        $criteria->compare('last_login', $this->last_login, true);
        $criteria->compare('is_active', $this->is_active);
        $criteria->compare('userid', $this->userid, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('location', $this->location, true);
        $criteria->compare('dob', $this->dob, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('role', $this->role, true);
        $criteria->compare('is_internal', $this->is_internal);
        $criteria->compare('full_details', $this->full_details, true);

        return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
                ));
    }
    
}