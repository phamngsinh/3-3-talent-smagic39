<?php
/* @var $this JobSubcategoriesController */
/* @var $model JobSubcategories */

$this->breadcrumbs=array(
	'Job Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobSubcategories', 'url'=>array('index')),
	array('label'=>'Manage JobSubcategories', 'url'=>array('admin')),
);
?>

<h1>Create JobSubcategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>