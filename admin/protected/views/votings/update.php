<?php
$this->breadcrumbs=array(
	'Votings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Votings', 'url'=>array('index')),
	array('label'=>'Create Votings', 'url'=>array('create')),
	array('label'=>'View Votings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Votings', 'url'=>array('admin')),
);
?>

<h1>Update Votings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>