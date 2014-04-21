<?php
/* @var $this JobResumesController */
/* @var $model JobResumes */

$this->breadcrumbs=array(
	'Job Resumes'=>array('index'),
	$model->resume_id,
);

$this->menu=array(
	array('label'=>'List JobResumes', 'url'=>array('index')),
	array('label'=>'Create JobResumes', 'url'=>array('create')),
	array('label'=>'Update JobResumes', 'url'=>array('update', 'id'=>$model->resume_id)),
	array('label'=>'Delete JobResumes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->resume_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobResumes', 'url'=>array('admin')),
);
?>

<h1>View JobResumes #<?php echo $model->resume_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'resume_id',
		'employ_id',
		'job_id',
		'file_id',
		'coverletter',
	),
)); ?>
