<?php
/* @var $this JobEmployeesController */
/* @var $model JobEmployees */

$this->breadcrumbs=array(
	'Job Employees'=>array('index'),
	$model->employ_id=>array('view','id'=>$model->employ_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobEmployees', 'url'=>array('index')),
	array('label'=>'Create JobEmployees', 'url'=>array('create')),
	array('label'=>'View JobEmployees', 'url'=>array('view', 'id'=>$model->employ_id)),
	array('label'=>'Manage JobEmployees', 'url'=>array('admin')),
);
?>

<h1>Update JobEmployees <?php echo $model->employ_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>