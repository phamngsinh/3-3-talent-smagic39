<?php
$this->breadcrumbs=array(
	'Ms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ms', 'url'=>array('index')),
	array('label'=>'Create Ms', 'url'=>array('create')),
	array('label'=>'View Ms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ms', 'url'=>array('admin')),
);
?>

<h1>Update Ms <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>