<?php
/* @var $this JobSubcategoriesController */
/* @var $model JobSubcategories */

$this->breadcrumbs=array(
	'Job Subcategories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobSubcategories', 'url'=>array('index')),
	array('label'=>'Create JobSubcategories', 'url'=>array('create')),
	array('label'=>'View JobSubcategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobSubcategories', 'url'=>array('admin')),
);
?>

<h1>Update JobSubcategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>