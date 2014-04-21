<?php
$this->breadcrumbs=array(
	'Flavours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Flavour', 'url'=>array('index')),
	array('label'=>'Manage Flavour', 'url'=>array('admin')),
);
?>

<h1>Create Flavour</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>