<?php
$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PageCategory', 'url'=>array('index')),
	array('label'=>'Create PageCategory', 'url'=>array('create')),
	array('label'=>'View PageCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PageCategory', 'url'=>array('admin')),
);
?>

<h1>Update PageCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>