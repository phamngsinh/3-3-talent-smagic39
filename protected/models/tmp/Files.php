<?php

/**
 * This is the model class for table "tbl_job_files".
 *
 * The followings are the available columns in table 'tbl_job_files':
 * @property integer $file_id
 * @property string $filename
 * @property integer $uri
 * @property string $timestamp
 * @property integer $uid
 */
class Files extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_job_files';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uri, uid', 'numerical', 'integerOnly' => true),
            array('filename', 'length', 'max' => 255),
            array('timestamp', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('file_id, filename, uri, timestamp, uid', 'safe', 'on' => 'search'),
        );
    }

    public function primaryKey() {
        return 'file_id';
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
            'file_id' => 'File',
            'filename' => 'Filename',
            'uri' => 'Uri',
            'timestamp' => 'Time to send file',
            'uid' => 'Who post file',
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

        $criteria->compare('file_id', $this->file_id);
        $criteria->compare('filename', $this->filename, true);
        $criteria->compare('uri', $this->uri);
        $criteria->compare('timestamp', $this->timestamp, true);
        $criteria->compare('uid', $this->uid);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Files the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
