<?php

/**
 * This is the model class for table "tbl_icecream_category".
 *
 * The followings are the available columns in table 'tbl_icecream_category':
 * @property integer $icecream_category_id
 * @property string $icecream_title
 * @property string $description
 * @property string $date
 * @property string $ip_address
 */
class IcecreamCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return IcecreamCategory the static model class
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
		return 'tbl_icecream_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('icecream_title, description, date, ip_address', 'required'),
			array('icecream_title', 'length', 'max'=>255),
			array('date', 'length', 'max'=>50),
			array('ip_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('icecream_category_id, icecream_title, description, date, ip_address', 'safe', 'on'=>'search'),
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
			'icecream_category_id' => 'Icecream Category',
			'icecream_title' => 'Icecream Title',
			'description' => 'Description',
			'date' => 'Date',
			'ip_address' => 'Ip Address',
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

		$criteria->compare('icecream_category_id',$this->icecream_category_id);
		$criteria->compare('icecream_title',$this->icecream_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}