<?php
$this->breadcrumbs=array(
	'Debates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Debate', 'url'=>array('index')),
	array('label'=>'Manage Debate', 'url'=>array('admin')),
);
?>

<h1>Create Debate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>