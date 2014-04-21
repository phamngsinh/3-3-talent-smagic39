<?php
$this->breadcrumbs=array(
	'Ms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ms', 'url'=>array('index')),
	array('label'=>'Create Ms', 'url'=>array('create')),
	array('label'=>'Update Ms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ms', 'url'=>array('admin')),
);
?>

<h1>View Ms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'var_name',
		'value1',
		'value2',
		'value3',
		'value4_text',
		'value5_text',
		'value6_int',
		'value7_int',
	),
)); ?>
