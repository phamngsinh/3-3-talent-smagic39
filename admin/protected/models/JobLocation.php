<?php

/**
 * This is the model class for table "tbl_job_location".
 *
 * The followings are the available columns in table 'tbl_job_location':
 * @property integer $job_location_id
 * @property string $address
 * @property string $fax_number
 * @property string $geo
 * @property string $map
 * @property string $opening_hours_specification
 * @property string $telephone
 */
class JobLocation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_job_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address, telephone', 'required'),
			array('address, fax_number, geo, map,zip,country,city, opening_hours_specification, telephone', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('job_location_id, address, fax_number, geo, map, opening_hours_specification, telephone', 'safe', 'on'=>'search'),
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
			'job_location_id' => 'Job Location',
			'address' => 'Physical address of the item.',
                        'city'=>'City',
                        'zip'=>'Zip Code',
                        'country'=>'Country',
			'fax_number' => 'The fax number.',
			'geo' => 'The geo coordinates of the place.',
			'map' => 'A URL to a map of the place. Supercedes maps.',
			'opening_hours_specification' => 'Opening Hours Specification',
			'telephone' => 'Telephone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('job_location_id',$this->job_location_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('fax_number',$this->fax_number,true);
		$criteria->compare('geo',$this->geo,true);
		$criteria->compare('map',$this->map,true);
		$criteria->compare('opening_hours_specification',$this->opening_hours_specification,true);
		$criteria->compare('telephone',$this->telephone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobLocation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
         public static function getLocation($id) {
            $location = JobLocation::model()->findByPk($id);
            $location = $location->city ? $location->city : $location->address;
            return $location;
        }
}
