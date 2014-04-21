<?php
$this->breadcrumbs=array(
	'Flavours'=>array('index'),
	$model->flavour_id,
);

$this->menu=array(
	array('label'=>'List Flavour', 'url'=>array('index')),
	array('label'=>'Create Flavour', 'url'=>array('create')),
	array('label'=>'Update Flavour', 'url'=>array('update', 'id'=>$model->flavour_id)),
	array('label'=>'Delete Flavour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->flavour_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Flavour', 'url'=>array('admin')),
);
?>

<h1>View Flavour #<?php echo $model->flavour_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'flavour_id',
		'icecream_category_id',
		'flavout_title',
		'pic',
		'detail',
		'ingrediants',
		'date',
		'ip_address',
	),
)); ?>
