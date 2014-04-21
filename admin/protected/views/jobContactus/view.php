<?php
/* @var $this JobContactusController */
/* @var $model JobContactus */

$this->breadcrumbs=array(
	'Job Contactuses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobContactus', 'url'=>array('index')),
	array('label'=>'Create JobContactus', 'url'=>array('create')),
	array('label'=>'Update JobContactus', 'url'=>array('update', 'id'=>$model->contactus_id)),
	array('label'=>'Delete JobContactus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contactus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobContactus', 'url'=>array('admin')),
);
?>

<h1>View JobContactus #<?php echo $model->contactus_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contactus_id',
		'name',
		'phone',
		'email',
		'content',
		'date_created',
	),
)); ?>
