<?php

/**
 * This is the model class for table "tbl_jobs".
 *
 * The followings are the available columns in table 'tbl_jobs':
 * @property integer $cat_id
 * @property integer $job_id
 * @property integer $base_salary
 * @property string $benefits
 * @property string $date_posted
 * @property string $education_requirements
 * @property string $experience_requirements
 * @property string $incentives
 * @property integer $job_location_id
 * @property string $responsibilities
 * @property string $special_commitments
 * @property string $title
 */
class Jobs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descriptions,date_posted, experience_requirements, job_location_id, responsibilities, special_commitments, title, descriptions, worktype_id', 'required'),
			array('cat_id, base_salary, job_location_id', 'numerical', 'integerOnly'=>true),
			array('benefits, education_requirements, incentives, responsibilities, special_commitments, descriptions', 'length'),
			array('title', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cat_id, job_id, base_salary, benefits, date_posted, education_requirements, experience_requirements, incentives, job_location_id, responsibilities, special_commitments, title, descriptions, worktype_id', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Category',
			'job_id' => 'Job',
			'worktype_id' => 'Work type',
                        'descriptions'=> 'Job Description',
			'benefits' => 'Job Benefits',
			'date_posted' => 'Change to job Status',
			'education_requirements' => 'Educational Background',
			'experience_requirements' => 'Skills and Experience',
			'incentives' => 'Bonus and Compensation',
			'job_location_id' => 'A (typically single) geographic location associated with the job position.',
			'responsibilities' => 'Job Responsibilities',
			'special_commitments' => 'Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.',
			'title' => 'Job Title',
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

		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('worktype_id',$this->worktype_id);
		$criteria->compare('base_salary',$this->base_salary);
		$criteria->compare('benefits',$this->benefits,true);
		$criteria->compare('date_posted',$this->date_posted,true);
		$criteria->compare('education_requirements',$this->education_requirements,true);
		$criteria->compare('experience_requirements',$this->experience_requirements,true);
		$criteria->compare('incentives',$this->incentives,true);
		$criteria->compare('job_location_id',$this->job_location_id);
		$criteria->compare('responsibilities',$this->responsibilities,true);
		$criteria->compare('special_commitments',$this->special_commitments,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('descriptions',$this->descriptions,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function getJobTitle($id) {
            $job_title = Jobs::model()->findByPk($id);
            return $job_title->title;
        }
}
