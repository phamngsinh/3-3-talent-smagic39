<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
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
 */
class AdminUsers extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @return Users the static model class
     */
    public $current_password;
    public $retype_password;
    
    private $salt = '';

    public static function model($className = __CLASS__)
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
	    array('username', 'required'),
	    array('current_password, password, retype_password,', 'required', 'on' => 'changePass'),
	    array('password', 'compare', 'compareAttribute' => 'retype_password', 'on' => 'changePass'),
	    array('current_password', 'authenticate'),
	    array('age, visits, is_active', 'numerical', 'integerOnly' => true),
	    array('name, email, city, userid, username, role, is_active', 'length', 'max' => 200),
	    array('gender, mobile_number, landline_number', 'length', 'max' => 20),
	    array('country, password', 'length', 'max' => 100),
	    array('nric', 'length', 'max' => 15),
	    array('timezone', 'length', 'max' => 10),
	    array('url, last_login', 'safe'),
	    // The following rule is used by search().
	    // Please remove those attributes that should not be searched.
	    array('id, name, email, age, gender, city, country, nric, mobile_number, landline_number, timezone, url, visits, last_login, is_active, userid, username, password', 'safe', 'on' => 'search'),
	    array('email', 'email', 'message' => 'Email address is invalid!'),
	    array('username', 'unique', 'message' => 'Username already exists!'),
	);
    }

    public function authenticate($attribute, $params)
    {
	if ($this->current_password)
	{
	    $model = Users::model()->findByPk(Yii::app()->user->id);
	    if ($model != null)
	    {				
		if (md5($this->current_password) != $model->password)
		{
		    $this->addError($attribute, "Incorrect current password.");
		}
	    }
	}
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

    public function beforeSave()
    {
	//reject if anybody try to add super admin manually

	if (!Yii::app()->user->checkAccess('super admin'))
	{
	    if ($this->role == "super admin")
	    {
		Yii::app()->user->setFlash('canNotAddSuperAdmin', Yii::t('canNotAddSuperAdmin', 'Sorry'));
		return false;
	    }
	}


	if (empty($this->id))
	{
	    return true;
	}

	

	//take old password if field is blank otherwise add new encrypted password.
	if ($this->password == "")
	{
	    $this->password = AdminUsers::model()->findByPk($this->id)->password;
	}
	else
	{
	    $this->password = md5($this->password);
	}

	


	parent::beforeSave();
	return true;
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
	return array(
	    'id' => 'ID',
	    'name' => 'Name',
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
	    'userid' => 'Userid',
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

	
	
	if(!Yii::app()->user->checkAccess('super admin')){
	    $criteria->addCondition("role!='super admin'");
	}
	
	return new CActiveDataProvider($this, array(
		    'criteria' => $criteria,
		    'pagination' => array(
			'pageSize' => 100,
		    ),
		));
    }

}