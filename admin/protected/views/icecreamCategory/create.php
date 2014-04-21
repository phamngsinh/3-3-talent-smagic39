<?php
$this->breadcrumbs=array(
	'Icecream Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IcecreamCategory', 'url'=>array('index')),
	array('label'=>'Manage IcecreamCategory', 'url'=>array('admin')),
);
?>

<h1>Create IcecreamCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>