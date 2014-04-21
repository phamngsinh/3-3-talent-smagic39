<?php
$this->breadcrumbs=array(
	'Authentications'=>array('changePassword'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Change Password (<b><?php echo $model->username; ?></b>)</h1>

<?php echo $this->renderPartial('_form_change_password', array('model'=>$model)); ?>