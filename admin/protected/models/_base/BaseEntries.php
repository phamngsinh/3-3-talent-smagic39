<?php

/**
 * This is the model base class for the table "tbl_entries".
 *
 * Columns in table "tbl_entries" available as properties of the model:
 
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
 *
 * There are no model relations.
 */
abstract class BaseEntries extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_entries';
    }

    public function rules() {
        return array(
            array('total_views, total_comments, total_downloads, is_deleted, display_order, category', 'required'),
            array('user_id, fb_user, title, photo, details, date, is_active, total_votes', 'default', 'setOnEmpty' => true, 'value' => null),
            array('user_id, is_active, total_votes, total_views, total_comments, total_downloads, is_deleted, display_order', 'numerical', 'integerOnly' => true),
            array('fb_user', 'length', 'max' => 45),
            array('title', 'length', 'max' => 250),
            array('photo', 'length', 'max' => 200),
            array('category', 'length', 'max' => 50),
            array('details, date', 'safe'),
            array('id, user_id, fb_user, title, photo, details, date, is_active, total_votes, total_views, total_comments, total_downloads, is_deleted, display_order, category', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->fb_user;
    }

    public function behaviors() {
        return array();
    }

    public function relations() {
       return array(
	    'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		'cat' => array(self::BELONGS_TO, 'Flavour', 'category'),
	);
	    
	   
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User'),
            'fb_user' => Yii::t('app', 'Fb User'),
            'title' => Yii::t('app', 'Title'),
            'photo' => Yii::t('app', 'Photo'),
            'details' => Yii::t('app', 'Details'),
            'date' => Yii::t('app', 'Date'),
            'is_active' => Yii::t('app', 'Is Active'),
            'total_votes' => Yii::t('app', 'Total Scoops'),
            'total_views' => Yii::t('app', 'Total Views'),
            'total_comments' => Yii::t('app', 'Total Comments'),
            'total_downloads' => Yii::t('app', 'Total Downloads'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'display_order' => Yii::t('app', 'Display Order'),
            'category' => Yii::t('app', 'Category'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('fb_user', $this->fb_user, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('photo', $this->photo, true);
        $criteria->compare('details', $this->details, true);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('is_active', $this->is_active);
        $criteria->compare('total_votes', $this->total_votes);
        $criteria->compare('total_views', $this->total_views);
        $criteria->compare('total_comments', $this->total_comments);
        $criteria->compare('total_downloads', $this->total_downloads);
        $criteria->compare('is_deleted', $this->is_deleted);
        $criteria->compare('display_order', $this->display_order);
        $criteria->compare('category', $this->category, true);

        return new CActiveDataProvider($this, array(
		    'criteria' => $criteria,
		    'pagination' => array(
			'pageSize' => 100,
		    ),
		));
    }
    

     protected function showRecieverImage($data)
    {

	$image = "https://graph.facebook.com/" . $data->selected_friends . "/picture";

	$c= CHtml::link(CHtml::image($image, '', array('width' => '50')) . "<br />" . $data->user->name, $data->user->url, array('target' => '_blank'));
	
	$c.="<br />".@$data->user->email;
	
	return $c;
	
	

	//return '<div id="video'.$data->id.'" style="cursor:pointer" onclick="showVideoInline(\''.$data->id.'\',\''.self::getYoutubeVideoId($data->url).'\')" >'.CHtml::image($image,'',array('width'=>'100')).'</div>';
    }
	
    
    
     protected function showUserImage($data)
    {

	$image = "https://graph.facebook.com/" . $data->fb_user . "/picture";

	$c= CHtml::link(CHtml::image($image, '', array('width' => '50')) . "<br />" . $data->user->name, $data->user->url, array('target' => '_blank'));
	
	$c.="<br />".@$data->user->email;
	
	return $c;
	
	

	//return '<div id="video'.$data->id.'" style="cursor:pointer" onclick="showVideoInline(\''.$data->id.'\',\''.self::getYoutubeVideoId($data->url).'\')" >'.CHtml::image($image,'',array('width'=>'100')).'</div>';
    }
	
	protected function showFlavourImage($data)
    {

	$image = "./uploads/188x200/".$data->cat->pic;

	$c= CHtml::image($image, '', array('width' => '50'));
	
	$c.="<br />".@$data->cat->flavout_title;
	
	return $c;
	
	

	//return '<div id="video'.$data->id.'" style="cursor:pointer" onclick="showVideoInline(\''.$data->id.'\',\''.self::getYoutubeVideoId($data->url).'\')" >'.CHtml::image($image,'',array('width'=>'100')).'</div>';
    }
    
    
    protected function showEntryPhoto($data)
    {	
	$image = "../photos/130x130/" . $data->photo;
	$c= CHtml::link(CHtml::image($image, '', array('width' => '100')), $image, array('target' => '_blank'));	
	return $c;
    }
    
    protected function showEntryBanner($data)
    {	
	$image = "../banners/texted/" . $data->photo;
	$c= CHtml::link(CHtml::image($image, '', array('width' => '150')), $image, array('target' => '_blank'));	
	return $c;
    }   
    
    protected function getFriends($data)
    {	
	$frArr = explode(",",$data->selected_friends);
	
	$c = '';
	foreach ($frArr as $fa)
	{
	    $c.="<a href='https://facebook.com/".trim($fa)."' target='_blank'>".$fa."</a><br />";
	}
	
	return $c;
    }
    
    
}