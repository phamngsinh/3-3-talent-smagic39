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

<h1>View Jobs #<?php echo $model->title; ?></h1>
<?php
    $categories = JobCategories::Model()->getCatName($model->cat_id);
    $worktype = JobWorktype::Model()->getName($model->worktype_id);
    $location = JobLocation::Model()->getLocation($model->job_location_id);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'job_id',
		'title',
		array(
                         'name'=>'cat_id',
                         'type'=>'raw',
                         'value'=>$categories,
                     ),
		array(
                         'name'=>'worktype_id',
                         'type'=>'raw',
                         'value'=>$worktype,
                     ),
		array(
                         'name'=>'job_location_id',
                         'type'=>'raw',
                         'value'=>$location,
                     ),
		array(
                         'name'=>'descriptions',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->descriptions),
                     ),
		array(
                         'name'=>'benefits',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->benefits),
                     ),
		array(
                         'name'=>'experience_requirements',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->experience_requirements),
                     ),
		array(
                         'name'=>'education_requirements',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->education_requirements),
                     ),
		'base_salary',
		'date_posted',
		array(
                         'name'=>'incentives',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->incentives),
                     ),
		array(
                         'name'=>'responsibilities',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->responsibilities),
                     ),
		array(
                         'name'=>'special_commitments',
                         'type'=>'raw',
                         'value'=>  strip_tags($model->special_commitments),
                     ),
	),
)); ?>
