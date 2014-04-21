<?php
$this->breadcrumbs=array(
	'Debates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Debate', 'url'=>array('index')),
	array('label'=>'Create Debate', 'url'=>array('create')),
	array('label'=>'Update Debate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Debate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Debate', 'url'=>array('admin')),
);
?>

<h1>View Debate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'debate_title',
		'image',
		'favour_title',
		'favour_video',
		'favour_description',
		'against_title',
		'against_description',
		'against_video',
		'ip_address',
		'start_date',
		'expire_date',
		'is_featured',
	),
)); ?>
