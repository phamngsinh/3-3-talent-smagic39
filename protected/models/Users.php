<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $id
 * @property string $name
 * @property string $first_name
 * @property string $email
 * @property integer $age
 * @property string $gender
 * @property string $city
 * @property string $country
 * @property string $nric
 * @property string $timezone
 * @property string $url
 * @property integer $visits
 * @property string $last_login
 * @property integer $is_active
 * @property string $username
 * @property string $password
 */
class Users extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @return Users the static model class
     */
    public static function model($className=__CLASS__)
    {
	return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
	return 'tbl_users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
	// NOTE: you should only define rules for those attributes that
	// will receive user inputs.
	return array(
	    array('age, visits, is_active, is_subscribed', 'numerical', 'integerOnly' => true),
	    array('salutation, contact_number, name, first_name, last_name, location, email, city, userid, birthday, phone_number_prefix, phone_number, i_am', 'length', 'max' => 200),
	    array('gender, mobile_number, landline_number, postal_code', 'length', 'max' => 20),
	    array('country, username, password, i_am_lover_of', 'length', 'max' => 100),
	    array('nric', 'length', 'max' => 15),
	    array('timezone', 'length', 'max' => 10),
	    array('url, last_login, address', 'safe'),
	    // The following rule is used by search().
	    // Please remove those attributes that should not be searched.
	    array('id, first_name, last_name, location, name, userid, email, age, gender, city, country, nric, mobile_number, landline_number, timezone, url, visits, last_login, is_active, username, password', 'safe', 'on' => 'search'),
	);
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
	// NOTE: you may need to adjust the relation name and the related
	// class name for the relations automatically generated below.
	return array(
	   
	    
	);
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
	return array(
	    'id' => 'ID',
	    'name' => 'Name',
	    'first_name' => 'First Name',
	    'last_name' => 'Last Name',
	    'location' => 'Location',
	    'email' => 'Email',
	    'age' => 'Age',
	    'gender' => 'Gender',
	    'city' => 'City',
	    'country' => 'Country',
	    'nric' => 'Nric',
	    'mobile_number' => 'Mobile Number',
	    'landline_number' => 'Landline Number',
	    'timezone' => 'Timezone',
	    'url' => 'Url',
	    'visits' => 'Visits',
	    'last_login' => 'Last Login',
	    'is_active' => 'Is Active',
	    'userid' => 'User ID',
	    'username' => 'Username',
	    'password' => 'Password',
	);
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
	// Warning: Please modify the following code to remove attributes that
	// should not be searched.

	$criteria = new CDbCriteria;

	$criteria->compare('id', $this->id);
	$criteria->compare('name', $this->name, true);
	$criteria->compare('first_name', $this->first_name, true);
	$criteria->compare('last_name', $this->last_name, true);
	$criteria->compare('location', $this->location, true);
	$criteria->compare('email', $this->email, true);
	$criteria->compare('age', $this->age);
	$criteria->compare('gender', $this->gender, true);
	$criteria->compare('city', $this->city, true);
	$criteria->compare('country', $this->country, true);
	$criteria->compare('nric', $this->nric, true);
	$criteria->compare('timezone', $this->timezone, true);
	$criteria->compare('url', $this->url, true);
	$criteria->compare('visits', $this->visits);
	$criteria->compare('last_login', $this->last_login, true);
	$criteria->compare('is_active', $this->is_active);
	$criteria->compare('userid', $this->userid, true);
	$criteria->compare('username', $this->username, true);
	$criteria->compare('password', $this->password, true);

	return new CActiveDataProvider($this, array(
		    'criteria' => $criteria,
		));
    }

}