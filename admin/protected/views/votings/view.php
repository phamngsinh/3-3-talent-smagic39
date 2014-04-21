<?php
$this->breadcrumbs=array(
	'Votings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Votings', 'url'=>array('index')),
	array('label'=>'Create Votings', 'url'=>array('create')),
	array('label'=>'Update Votings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Votings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Votings', 'url'=>array('admin')),
);
?>

<h1>View Votings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'entry_id',
		'user_id',
		'fb_user',
		'ip_address',
		'vote_time',
		'vote_date',
		'vote_value',
		'vote_type',
	),
)); ?>
