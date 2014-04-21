<?php
$this->breadcrumbs=array(
	'Icecream Categories'=>array('index'),
	$model->icecream_category_id,
);

$this->menu=array(
	array('label'=>'List IcecreamCategory', 'url'=>array('index')),
	array('label'=>'Create IcecreamCategory', 'url'=>array('create')),
	array('label'=>'Update IcecreamCategory', 'url'=>array('update', 'id'=>$model->icecream_category_id)),
	array('label'=>'Delete IcecreamCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->icecream_category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IcecreamCategory', 'url'=>array('admin')),
);
?>

<h1>View IcecreamCategory #<?php echo $model->icecream_category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'icecream_category_id',
		'icecream_title',
		'description',
		'date',
		'ip_address',
	),
)); ?>
