<?php
$this->breadcrumbs = array(
    Yii::t('app', 'Tests') => array('index'),
    Yii::t('app', $model->name),
);if(!isset($this->menu) || $this->menu === array()) {
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
/*array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),*/
);
}
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data' => $model,
'attributes' => array(
array(
                        'name'=>'id',
                        'visible'=>Yii::app()->user->id=='admin'
                    ),'name',array(
                        'name'=>'email',
                        'type'=>'email'
                    ),'age','gender','city','country','nric','mobile_number','landline_number','timezone',array(
                        'name'=>'url',
                        'type'=>'url'
                    ),'visits','last_login','is_active','userid','username',array(
                        'name'=>'password',
                        'visible'=>Yii::app()->user->id=='admin'
                    ),'first_name','last_name','location','dob','title','role',array(
                        'name'=>'is_internal',
                        'type'=>'boolean'
                    ),array(
                        'name'=>'full_details',
                        'type'=>'ntext'
                    ),)));?>