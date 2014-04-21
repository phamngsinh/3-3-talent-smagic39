<?php

/**
 * This is the model class for table "tbl_area_detail".
 *
 * The followings are the available columns in table 'tbl_area_detail':
 * @property integer $area_detail_id
 * @property string $area_detail_title
 * @property string $block
 * @property string $address
 * @property string $zip_code
 * @property string $phone
 * @property integer $area_id
 * @property string $date
 * @property string $ip_address
 */
class AreaDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AreaDetail the static model class
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
		return 'tbl_area_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_detail_title, block, address, zip_code, phone, area_id', 'required'),
			array('area_id', 'numerical', 'integerOnly'=>true),
			array('area_detail_title, block, zip_code, phone', 'length', 'max'=>255),
			//array('date', 'length', 'max'=>50),
			//array('ip_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('area_detail_id, area_detail_title, block, address, zip_code, phone, area_id, date, ip_address', 'safe', 'on'=>'search'),
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
			'area_detail_id' => 'Area Detail',
			'area_detail_title' => 'Area Detail Title',
			'block' => 'Block',
			'address' => 'Address',
			'zip_code' => 'Zip Code',
			'phone' => 'Phone',
			'area_id' => 'Area',
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

		$criteria->compare('area_detail_id',$this->area_detail_id);
		$criteria->compare('area_detail_title',$this->area_detail_title,true);
		$criteria->compare('block',$this->block,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}