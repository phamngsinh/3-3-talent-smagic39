<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */

$this->breadcrumbs=array(
	'Job Locations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobLocation', 'url'=>array('index')),
	array('label'=>'Manage JobLocation', 'url'=>array('admin')),
);
?>

<h1>Create JobLocation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>