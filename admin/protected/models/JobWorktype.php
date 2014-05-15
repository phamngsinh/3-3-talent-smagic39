<?php

/**
 * This is the model class for table "tbl_job_worktype".
 *
 * The followings are the available columns in table 'tbl_job_worktype':
 * @property integer $worktype_id
 * @property string $name
 * @property integer $job_id
 */
class JobWorktype extends CActiveRecord
{
        public static function getName($id) {
            if($id == 0) {
                $name = '';
            } else {
                $name = JobWorktype::model()->findByPk($id);
            }
            return isset($name->name) ? $name->name : '' ;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobWorktype the static model class
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
		return 'tbl_job_worktype';
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
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('worktype_id, name', 'safe', 'on'=>'search'),
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
			'worktype_id' => 'Worktype',
			'name' => 'Name',
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

		$criteria->compare('worktype_id',$this->worktype_id);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    public function  getListNameOfUser($id){
        $data_tmp =  JobAlerts::model()->find('employ_id ='.$id);
        $list_tmp = explode('|',$data_tmp['worktype_id']);
        $list = implode(',',$list_tmp);

        $criteria  = new CDbCriteria();
        $criteria->select  = 'name';
        $criteria->condition = 'worktype_id in ('.$list.')';

        $data = JobWorktype::model()->findAll($criteria);
        $list_data = '';
        foreach($data as  $key){
            $list_data .= $key['name'].',';
        }
        return $list_data;
    }
}
