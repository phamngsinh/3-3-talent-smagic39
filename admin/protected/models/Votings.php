<?php

/**
 * This is the model class for table "tbl_votings".
 *
 * The followings are the available columns in table 'tbl_votings':
 * @property integer $id
 * @property integer $entry_id
 * @property integer $user_id
 * @property string $fb_user
 * @property string $ip_address
 * @property string $vote_time
 * @property string $vote_date
 * @property integer $vote_value
 * @property integer $vote_type
 */
class Votings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Votings the static model class
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
		return 'tbl_votings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fb_user, vote_date, vote_value', 'required'),
			array('entry_id, user_id, vote_value, vote_type', 'numerical', 'integerOnly'=>true),
			array('fb_user', 'length', 'max'=>200),
			array('ip_address', 'length', 'max'=>45),
			array('vote_time', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, entry_id, user_id, fb_user, ip_address, vote_time, vote_date, vote_value, vote_type', 'safe', 'on'=>'search'),
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

      		'de'=>array(self::BELONGS_TO, 'Debate', 'id'),
			//'debate'=>array(self::BELONGS_TO, 'Debate', 'id'),
  		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'entry_id' => 'Entry',
			'user_id' => 'User',
			'fb_user' => 'Fb User',
			'ip_address' => 'Ip Address',
			'vote_time' => 'Vote Time',
			'vote_date' => 'Vote Date',
			'vote_value' => 'Vote Value',
			'vote_type' => 'Vote Type',
		);
	}
   
   protected function showUserImage($data)
    {
	$image = "https://graph.facebook.com/" . $data->fb_user . "/picture";

	return CHtml::link(CHtml::image($image, '', array('width' => '50')) );

	//return '<div id="video'.$data->id.'" style="cursor:pointer" onclick="showVideoInline(\''.$data->id.'\',\''.self::getYoutubeVideoId($data->url).'\')" >'.CHtml::image($image,'',array('width'=>'100')).'</div>';
    }
	
	protected function vote_type($data)
		{
		 
		 if($data->vote_type == 1)
			{
			 
			 $type = 'Favour';
			 
			}
			 else
			     {
				  
				  $type = 'Against';
				  
				 }
			 
			 return $type;
		 
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
		$criteria->compare('entry_id',$this->entry_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fb_user',$this->fb_user,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('vote_time',$this->vote_time,true);
		$criteria->compare('vote_date',$this->vote_date,true);
		$criteria->compare('vote_value',$this->vote_value);
		$criteria->compare('vote_type',$this->vote_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}