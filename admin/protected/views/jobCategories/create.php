<?php
/* @var $this JobCategoriesController */
/* @var $model JobCategories */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobCategories', 'url'=>array('index')),
	array('label'=>'Manage JobCategories', 'url'=>array('admin')),
);
?>

<h1>Create JobCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>