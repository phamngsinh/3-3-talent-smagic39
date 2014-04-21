<?php
$this->breadcrumbs=array(
	'Queries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Queries', 'url'=>array('index')),
	array('label'=>'Manage Queries', 'url'=>array('admin')),
);
?>

<h1>Create Queries</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>