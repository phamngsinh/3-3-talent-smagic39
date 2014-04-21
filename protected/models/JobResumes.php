<?php

/**
 * This is the model class for table "tbl_job_resumes".
 *
 * The followings are the available columns in table 'tbl_job_resumes':
 * @property integer $resume_id
 * @property integer $employ_id
 * @property integer $job_id
 * @property integer $file_id
 * @property string $coverletter
 */
class JobResumes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_job_resumes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employ_id, job_id, file_id, coverletter', 'required'),
			array('employ_id, job_id, file_id', 'numerical', 'integerOnly'=>true),
			array('coverletter', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('resume_id, employ_id, job_id, file_id, coverletter', 'safe', 'on'=>'search'),
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
			'resume_id' => 'Resume',
			'employ_id' => 'Employ',
			'job_id' => 'Job',
			'file_id' => 'File',
			'coverletter' => 'Coverletter',
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

		$criteria->compare('resume_id',$this->resume_id);
		$criteria->compare('employ_id',$this->employ_id);
		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('file_id',$this->file_id);
		$criteria->compare('coverletter',$this->coverletter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobResumes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
