<?php

/**
 * This is the model class for table "tbl_debate".
 *
 * The followings are the available columns in table 'tbl_debate':
 * @property integer $id
 * @property string $debate_title
 * @property string $image
 * @property string $favour_title
 * @property string $favour_video
 * @property string $favour_description
 * @property string $against_title
 * @property string $against_description
 * @property string $against_video
 * @property string $ip_address
 * @property string $expire_date
 * @property string $is_featured
 */
class Debate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Debate the static model class
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
		return 'tbl_debate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('debate_title, image, favour_title, favour_video, favour_description, against_title, against_description, against_video, ip_address,start_date, expire_date', 'required'),
			array('debate_title, image, favour_title, favour_video, against_title, against_video, ip_address, expire_date, is_featured', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, debate_title, image, favour_title, favour_video, favour_description, against_title, against_description, against_video, ip_address,start_date, expire_date, is_featured', 'safe', 'on'=>'search'),
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
			'debate_title' => 'Debate Title',
			'image' => 'Image',
			'favour_title' => 'Favour Title',
			'favour_video' => 'Favour Video',
			'favour_description' => 'Favour Description',
			'against_title' => 'Against Title',
			'against_description' => 'Against Description',
			'against_video' => 'Against Video',
			'ip_address' => 'Ip Address',
			'start_date' => 'Start Date',
			'expire_date' => 'Expire Date',
			'is_featured' => 'Is Featured',
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
		$criteria->compare('debate_title',$this->debate_title,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('favour_title',$this->favour_title,true);
		$criteria->compare('favour_video',$this->favour_video,true);
		$criteria->compare('favour_description',$this->favour_description,true);
		$criteria->compare('against_title',$this->against_title,true);
		$criteria->compare('against_description',$this->against_description,true);
		$criteria->compare('against_video',$this->against_video,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('expire_date',$this->expire_date,true);
		$criteria->compare('is_featured',$this->is_featured,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}