<?php
$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Page Category', 'url'=>array('admin')),
);
?>

<h1>Create PageCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>