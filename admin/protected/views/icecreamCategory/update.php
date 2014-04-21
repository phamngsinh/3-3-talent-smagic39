<?php
$this->breadcrumbs=array(
	'Icecream Categories'=>array('index'),
	$model->icecream_category_id=>array('view','id'=>$model->icecream_category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IcecreamCategory', 'url'=>array('index')),
	array('label'=>'Create IcecreamCategory', 'url'=>array('create')),
	array('label'=>'View IcecreamCategory', 'url'=>array('view', 'id'=>$model->icecream_category_id)),
	array('label'=>'Manage IcecreamCategory', 'url'=>array('admin')),
);
?>

<h1>Update IcecreamCategory <?php echo $model->icecream_category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>