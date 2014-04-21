<?php

/**
 * This is the model class for table "tbl_flavour".
 *
 * The followings are the available columns in table 'tbl_flavour':
 * @property integer $flavour_id
 * @property integer $icecream_category_id
 * @property string $flavout_title
 * @property string $pic
 * @property string $detail
 * @property string $ingrediants
 * @property string $nutritions
 * @property string $date
 * @property string $ip_address
 */
class Flavour extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Flavour the static model class
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
		return 'tbl_flavour';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('icecream_category_id, flavout_title, detail', 'required'),
			array('icecream_category_id', 'numerical', 'integerOnly'=>true),
			array('flavout_title, pic', 'length', 'max'=>255),
			//array('date', 'length', 'max'=>50),
			//array('ip_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('flavour_id, icecream_category_id, flavout_title, pic, detail, ingrediants, nutritions, date, ip_address', 'safe', 'on'=>'search'),
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

      		'fc'=>array(self::BELONGS_TO, 'IcecreamCategory', 'icecream_category_id'),
  		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'flavour_id' => 'Flavour',
			'icecream_category_id' => 'Icecream Category',
			'flavout_title' => 'Flavour Title',
			'pic' => 'Pic',
			'detail' => 'Detail',
			'ingrediants' => 'Ingrediants',
			'nutritions' => 'Nutritions',
			'date' => 'Date',
			'ip_address' => 'Ip Address',
		);
	}
    
	protected function showEntryPhoto($data)
    {	
	$image = "./uploads/188x200/" . $data->pic;
	$c= CHtml::link(CHtml::image($image, '', array('width' => '100')), $image, array('target' => '_blank'));	
	return $c;
    }
	
	protected function showingrediantPhoto($data)
    {	
	$image = "./uploads/188x200/" . $data->ingrediants;
	$c= CHtml::link(CHtml::image($image, '', array('width' => '100')), $image, array('target' => '_blank'));	
	return $c;
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

		$criteria->compare('flavour_id',$this->flavour_id);
		$criteria->compare('icecream_category_id',$this->icecream_category_id);
		$criteria->compare('flavout_title',$this->flavout_title,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('ingrediants',$this->ingrediants,true);
		$criteria->compare('nutritions',$this->nutritions,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('ip_address',$this->ip_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}