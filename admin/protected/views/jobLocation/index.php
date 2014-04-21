<?php
/* @var $this JobLocationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Locations',
);

$this->menu=array(
	array('label'=>'Create JobLocation', 'url'=>array('create')),
	array('label'=>'Manage JobLocation', 'url'=>array('admin')),
);
?>

<h1>Job Locations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
