<?php
$this->breadcrumbs=array(
	'Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ms', 'url'=>array('index')),
	array('label'=>'Manage Ms', 'url'=>array('admin')),
);
?>

<h1>Create Ms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>