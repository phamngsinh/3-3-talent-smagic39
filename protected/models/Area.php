<?php

/**
 * This is the model class for table "tbl_area".
 *
 * The followings are the available columns in table 'tbl_area':
 * @property integer $area_id
 * @property string $area_title
 * @property string $date
 * @property string $ip_address
 */
class Area extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Area the static model class
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
		return 'tbl_area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_title, date, ip_address', 'required'),
			array('area_title', 'length', 'max'=>255),
			array('date', 'length', 'max'=>50),
			array('ip_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('area_id, area_title, date, ip_address', 'safe', 'on'=>'search'),
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
			'area_id' => 'Area',
			'area_title' => 'Area Title',
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

		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('area_title',$this->area_title,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}