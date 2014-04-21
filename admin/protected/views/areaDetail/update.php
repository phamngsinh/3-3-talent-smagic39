<?php
$this->breadcrumbs=array(
	'Area Details'=>array('index'),
	$model->area_detail_id=>array('view','id'=>$model->area_detail_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AreaDetail', 'url'=>array('index')),
	array('label'=>'Create AreaDetail', 'url'=>array('create')),
	array('label'=>'View AreaDetail', 'url'=>array('view', 'id'=>$model->area_detail_id)),
	array('label'=>'Manage AreaDetail', 'url'=>array('admin')),
);
?>

<h1>Update AreaDetail <?php echo $model->area_detail_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>