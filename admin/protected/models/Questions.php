<?php

/**
 * This is the model class for table "tbl_questions".
 *
 * The followings are the available columns in table 'tbl_questions':
 * @property integer $id
 * @property integer $video_id
 * @property string $question
 */
class Questions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Questions the static model class
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
		return 'tbl_questions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('question, visual', 'required'),
			array('video_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, video_id, question', 'safe', 'on'=>'search'),
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
			'video_id' => 'Video',
			'question' => 'Question',
			'visual' => 'Question Visual',
		);
	}

	function showQuestions($data)
	{
	    
	    $d='<div class="listings" >';
	    
	    
	    $d.= "<b>".CHtml::decode($data->question)."</b><ul>";
	    
	    $options = Options::model()->findAllByAttributes(array('question_id' => $data->id));

	    $i = 1;
	    foreach ($options as $option)
	    {
		$style = ($option->is_correct==1)?"style='color:green'":"";
		$d.='<li><div '.$style.' >'.$option->option.' ('.$option->score.')</div></li>';
	    }
	    
	    $d.= '</ul></div>';
	    
	    return $d;
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
		$criteria->compare('video_id',$this->video_id);
		$criteria->compare('question',$this->question,true);
		
		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
			'pageSize' => 100,
		    ),
		));
	}
	
}