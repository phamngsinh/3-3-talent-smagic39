<?php
$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PageCategory', 'url'=>array('index')),
	array('label'=>'Create PageCategory', 'url'=>array('create')),
	array('label'=>'Update PageCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PageCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PageCategory', 'url'=>array('admin')),
);
?>

<h1>View PageCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_category',
		'display_order',
	),
)); ?>
