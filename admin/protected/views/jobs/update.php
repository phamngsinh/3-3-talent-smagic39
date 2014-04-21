<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->title=>array('view','id'=>$model->job_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jobs', 'url'=>array('index')),
	array('label'=>'Create Jobs', 'url'=>array('create')),
	array('label'=>'View Jobs', 'url'=>array('view', 'id'=>$model->job_id)),
	array('label'=>'Manage Jobs', 'url'=>array('admin')),
);
?>

<h1>Update Jobs <?php echo $model->job_id; ?></h1>

<?php $this->renderPartial('_form', array(
                    'model' => $model,
                    'categories' => $categories,
                    'location' => $location,
                    'worktype' => $worktype,
                )); ?>