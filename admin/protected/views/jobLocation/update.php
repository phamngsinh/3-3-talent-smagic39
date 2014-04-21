<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */

$this->breadcrumbs=array(
	'Job Locations'=>array('index'),
	$model->job_location_id=>array('view','id'=>$model->job_location_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobLocation', 'url'=>array('index')),
	array('label'=>'Create JobLocation', 'url'=>array('create')),
	array('label'=>'View JobLocation', 'url'=>array('view', 'id'=>$model->job_location_id)),
	array('label'=>'Manage JobLocation', 'url'=>array('admin')),
);
?>

<h1>Update JobLocation <?php echo $model->job_location_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>