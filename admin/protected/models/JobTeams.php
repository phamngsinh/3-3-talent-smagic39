<?php

/**
 * This is the model class for table "tbl_job_teams".
 *
 * The followings are the available columns in table 'tbl_job_teams':
 * @property integer $teams_id
 * @property string $name
 * @property string $positions
 * @property string $descriptions
 * @property string $link_twitter
 * @property string $link_facebook
 * @property string $link_email
 * @property integer $image_id
 */
class JobTeams extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JobTeams the static model class
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
		return 'tbl_job_teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('image_id', 'numerical', 'integerOnly'=>true),
			array('name, positions, link_twitter, link_facebook, link_email', 'length', 'max'=>255),
			array('descriptions', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('teams_id, name, positions, descriptions, link_twitter, link_facebook, link_email, image_id', 'safe', 'on'=>'search'),
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
			'teams_id' => 'Teams',
			'name' => 'Name',
			'positions' => 'Positions',
			'descriptions' => 'Descriptions',
			'link_twitter' => 'Link Twitter',
			'link_facebook' => 'Link Linkedin',
			'link_email' => 'Link Email',
			'image_id' => 'Image',
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

		$criteria->compare('teams_id',$this->teams_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('positions',$this->positions,true);
		$criteria->compare('descriptions',$this->descriptions,true);
		$criteria->compare('link_twitter',$this->link_twitter,true);
		$criteria->compare('link_facebook',$this->link_facebook,true);
		$criteria->compare('link_email',$this->link_email,true);
		$criteria->compare('image_id',$this->image_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}