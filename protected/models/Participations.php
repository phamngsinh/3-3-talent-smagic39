<?php

/**
 * This is the model class for table "tbl_participations".
 *
 * The followings are the available columns in table 'tbl_participations':
 * @property integer $id
 * @property integer $user_id
 * @property integer $fb_id
 * @property integer $entry_id
 * @property integer $time
 * @property string $ip_address
 * @property integer $answer_id
 * @property integer $is_correct
 * @property integer $score
 * @property string $date
 * @property integer $is_confirmed
 */
class Participations extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Participations the static model class
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
		return 'tbl_participations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, fb_id, entry_id, time, ip_address, answer_id, score, date', 'required'),
			array('user_id, fb_id, entry_id, time, answer_id, is_correct, score, is_confirmed', 'numerical', 'integerOnly'=>true),
			array('ip_address', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, fb_id, entry_id, time, ip_address, answer_id, is_correct, score, date, is_confirmed', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'fb_id' => 'Fb',
			'entry_id' => 'Entry',
			'time' => 'Time',
			'ip_address' => 'Ip Address',
			'answer_id' => 'Answer',
			'is_correct' => 'Is Correct',
			'score' => 'Score',
			'date' => 'Date',
			'is_confirmed' => 'Is Confirmed',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fb_id',$this->fb_id);
		$criteria->compare('entry_id',$this->entry_id);
		$criteria->compare('time',$this->time);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('answer_id',$this->answer_id);
		$criteria->compare('is_correct',$this->is_correct);
		$criteria->compare('score',$this->score);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('is_confirmed',$this->is_confirmed);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}