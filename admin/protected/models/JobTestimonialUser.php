<?php

/**
 * This is the model class for table "tbl_job_testimonial_user".
 *
 * The followings are the available columns in table 'tbl_job_testimonial_user':
 * @property integer $testimonial_user_id
 * @property string $fullname
 * @property string $email
 * @property string $content
 * @property integer $approved
 * @property string $title
 * @property string $image
 */
class JobTestimonialUser extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_testimonial_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fullname, email, content, title, image', 'required'),
            array('approved', 'numerical', 'integerOnly' => true),
            array('fullname, email, title, image', 'length', 'max' => 255),
            array('email', 'email'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('testimonial_user_id, fullname, email, content, approved, title, image', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'testimonial_user_id' => 'Testimonial User',
            'fullname' => 'Full Name',
            'email' => 'Email',
            'content' => 'Content',
            'approved' => 'Approved',
            'title' => 'Title',
            'image' => 'Your Image',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $criteria = new CDbCriteria;

        $criteria->compare('testimonial_user_id', $this->testimonial_user_id);
        $criteria->compare('fullname', $this->fullname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('title', $this->title, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    public function beforeSave() {
        if(parent::beforeSave())
	{
            if($this->isNewRecord)
                if(Yii::app()->user->name == 'admin') {
                    $this->approved = 1;
                } else {
                    $this->approved = 0;
                } 
		return true;
	}
	else
		return false;
    }
    public static function getStatus($status) {

        $approved = '';
        if($status == 0) {
            $approved = 'No';
        } else {
            $approved = 'Yes';
        }
        return $approved;
    }
    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JobTestimonialUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function countModel() {
        $criteria = new CDbCriteria();
        $criteria->condition = 'approved=:status';
        $criteria->params = array(':status' => 1);
        $item_count2 = JobTestimonialUser::model()->count($criteria);
        return $item_count2;
    }

}
