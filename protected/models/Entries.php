<?php

/**
 * This is the model class for table "tbl_entries".
 *
 * The followings are the available columns in table 'tbl_entries':
 * @property integer $id
 * @property integer $user_id
 * @property string $fb_user
 * @property string $title
 * @property string $photo
 * @property string $details
 * @property string $date
 * @property integer $is_active
 * @property integer $total_votes
 * @property integer $total_views
 * @property integer $total_comments
 * @property integer $total_downloads
 * @property integer $is_deleted
 * @property integer $display_order
 * @property string $category
 * @property string $banner
 * @property string $selected_friends
 * @property string $ip_address
 */
class Entries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Entries the static model class
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
		return 'tbl_entries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('total_views, total_comments, total_downloads, is_deleted, display_order, category, banner, selected_friends, ip_address', 'required'),
			//array('user_id, is_active, total_votes, total_views, total_comments, total_downloads, is_deleted, display_order', 'numerical', 'integerOnly'=>true),
			//array('fb_user', 'length', 'max'=>45),
			//array('title, selected_friends', 'length', 'max'=>250),
			//array('photo', 'length', 'max'=>200),
			//array('category, ip_address', 'length', 'max'=>50),
			//array('banner', 'length', 'max'=>100),
		//	array('details, date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, fb_user, , photo, details, date, is_active, total_votes, total_views, total_comments, total_downloads, is_deleted, display_order, category, banner, selected_friends, ip_address', 'safe', 'on'=>'search'),
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

      		'flavour'=>array(self::BELONGS_TO, 'Flavour', 'category'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),

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
			'fb_user' => 'Fb User',
			'title' => 'Title',
			'photo' => 'Photo',
			'details' => 'Details',
			'date' => 'Date',
			'is_active' => 'Is Active',
			'total_votes' => 'Total Votes',
			'total_views' => 'Total Views',
			'total_comments' => 'Total Comments',
			'total_downloads' => 'Total Downloads',
			'is_deleted' => 'Is Deleted',
			'display_order' => 'Display Order',
			'category' => 'Category',
			'banner' => 'Banner',
			'selected_friends' => 'Selected Friends',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fb_user',$this->fb_user,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('total_votes',$this->total_votes);
		$criteria->compare('total_views',$this->total_views);
		$criteria->compare('total_comments',$this->total_comments);
		$criteria->compare('total_downloads',$this->total_downloads);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('display_order',$this->display_order);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('banner',$this->banner,true);
		$criteria->compare('selected_friends',$this->selected_friends,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}