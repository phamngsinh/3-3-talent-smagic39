<?php
$this->breadcrumbs=array(
	'Flavours'=>array('index'),
	$model->flavour_id=>array('view','id'=>$model->flavour_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Flavour', 'url'=>array('index')),
	array('label'=>'Create Flavour', 'url'=>array('create')),
	array('label'=>'View Flavour', 'url'=>array('view', 'id'=>$model->flavour_id)),
	array('label'=>'Manage Flavour', 'url'=>array('admin')),
);
?>

<h1>Update Flavour <?php echo $model->flavour_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>