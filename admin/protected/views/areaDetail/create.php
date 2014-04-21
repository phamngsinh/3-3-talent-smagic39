<?php
$this->breadcrumbs=array(
	'Area Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AreaDetail', 'url'=>array('index')),
	array('label'=>'Manage AreaDetail', 'url'=>array('admin')),
);
?>

<h1>Create AreaDetail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>