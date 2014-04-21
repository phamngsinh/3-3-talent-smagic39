<?php
$this->breadcrumbs=array(
	'Entries'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entries', 'url'=>array('create')),
	array('label'=>'Update Entries', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Entries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entries', 'url'=>array('admin')),
);
?>

<h1>View Entries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'fb_user',
		'title',
		'photo',
		'details',
		'date',
		'is_active',
		'total_votes',
		'total_views',
		'total_comments',
		'total_downloads',
		'is_deleted',
		'display_order',
		'category',
	),
)); ?>
