<?php

/**
 * This is the model class for table "tbl_queries".
 *
 * The followings are the available columns in table 'tbl_queries':
 * @property integer $id
 * @property string $salutation
 * @property string $name
 * @property string $email_address
 * @property string $subject
 * @property string $comments
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
			array('salutation, name, nric, email_address, subject, comments, date, ip_address, is_read', 'required'),
			array('is_read', 'numerical', 'integerOnly'=>true),
			array('salutation, ip_address, nric', 'length', 'max'=>20),
			array('name, email_address', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, salutation, name, nric, email_address, subject, comments, date, ip_address, is_read', 'safe', 'on'=>'search'),
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
			'salutation' => 'Salutation',
			'name' => 'Name',
			'email_address' => 'Email Address',
			'subject' => 'Subject',
			'comments' => 'Comments',
			'date' => 'Date',
			'ip_address' => 'Ip Address',
			'is_read' => 'Is Read',
			 'nric' => 'NRIC',
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
		$criteria->compare('salutation',$this->salutation,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('is_read',$this->is_read);
		$criteria->compare('nric',$this->nric,true);

		return new CActiveDataProvider($this, array(
		    'criteria' => $criteria,
		    'pagination' => array(
			'pageSize' => 100,
		    ),
		));
	}
	
	
	    public function defaultScope()
    {
	return array(
	    'order' => 'id DESC',
	    'limit' => '100',
	);
    }
}