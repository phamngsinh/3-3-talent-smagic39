<?php

/**
 * This is the model class for table "tbl_queries".
 *
 * The followings are the available columns in table 'tbl_queries':
 * @property integer $id
 * @property string $artist
 * @property string $salutation
 * @property string $name
 * @property string $email_address
 * @property string $contact_number
 * @property string $city_country
 * @property string $subject
 * @property string $comments
 * @property string $nric
 * @property string $date
 * @property string $ip_address
 * @property integer $is_read
 */
class Queries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Queries the static model class
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
		return 'tbl_queries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email_address, contact_number, city_country,comments', 'required'),
			array('is_read', 'numerical', 'integerOnly'=>true),
			array('artist', 'length', 'max'=>100),
			array('salutation, contact_number, nric, ip_address', 'length', 'max'=>20),
			array('name, email_address', 'length', 'max'=>200),
			//array('email_address', 'email'),
			array('city_country', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, artist, salutation, name, email_address, contact_number, city_country, subject, comments, nric, date, ip_address, is_read', 'safe', 'on'=>'search'),
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
			'artist' => 'Artist',
			'salutation' => 'Salutation',
			'name' => 'Name',
			'email_address' => 'Email Address',
			'contact_number' => 'Contact Number',
			'city_country' => 'City Country',
			'subject' => 'Subject',
			'comments' => 'Comments',
			'nric' => 'Nric',
			'date' => 'Date',
			'ip_address' => 'Ip Address',
			'is_read' => 'Is Read',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('artist',$this->artist,true);
		$criteria->compare('salutation',$this->salutation,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('contact_number',$this->contact_number,true);
		$criteria->compare('city_country',$this->city_country,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('nric',$this->nric,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('is_read',$this->is_read);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}