<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Jobs', 'url'=>array('index')),
	array('label'=>'Create Jobs', 'url'=>array('create')),
	array('label'=>'Update Jobs', 'url'=>array('update', 'id'=>$model->job_id)),
	array('label'=>'Delete Jobs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->job_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobs', 'url'=>array('admin')),
);
?>

<h1>View Jobs #<?php echo $model->job_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'job_id',
		'base_salary',
		'benefits',
		'date_posted',
		'education_requirements',
		'experience_requirements',
		'incentives',
		'job_location_id',
		'responsibilities',
		'special_commitments',
		'title',
	),
)); ?>
