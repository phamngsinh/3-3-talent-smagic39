<?php
$this->breadcrumbs=array(
	'Debates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Debate', 'url'=>array('index')),
	array('label'=>'Create Debate', 'url'=>array('create')),
	array('label'=>'View Debate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Debate', 'url'=>array('admin')),
);
?>

<h1>Update Debate <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>