<?php
/* @var $this JobEmployeesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Employees',
);

$this->menu=array(
	array('label'=>'Create JobEmployees', 'url'=>array('create')),
	array('label'=>'Manage JobEmployees', 'url'=>array('admin')),
);
?>

<h1>Job Employees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
