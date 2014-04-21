<?php
$this->breadcrumbs=array(
	'Area Details'=>array('index'),
	$model->area_detail_id,
);

$this->menu=array(
	array('label'=>'List AreaDetail', 'url'=>array('index')),
	array('label'=>'Create AreaDetail', 'url'=>array('create')),
	array('label'=>'Update AreaDetail', 'url'=>array('update', 'id'=>$model->area_detail_id)),
	array('label'=>'Delete AreaDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->area_detail_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AreaDetail', 'url'=>array('admin')),
);
?>

<h1>View AreaDetail #<?php echo $model->area_detail_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'area_detail_id',
		'area_detail_title',
		'block',
		'address',
		'zip_code',
		'phone',
		'area_id',
		//'date',
		//'ip_address',
	),
)); ?>
