<?php
/* @var $this JobEmployeesController */
/* @var $model JobEmployees */

$this->breadcrumbs=array(
	'Job Employees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobEmployees', 'url'=>array('index')),
	array('label'=>'Manage JobEmployees', 'url'=>array('admin')),
);
?>

<h1>Create JobEmployees</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>