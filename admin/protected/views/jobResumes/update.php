<?php
/* @var $this JobResumesController */
/* @var $model JobResumes */

$this->breadcrumbs=array(
	'Job Resumes'=>array('index'),
	$model->resume_id=>array('view','id'=>$model->resume_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobResumes', 'url'=>array('index')),
	array('label'=>'Create JobResumes', 'url'=>array('create')),
	array('label'=>'View JobResumes', 'url'=>array('view', 'id'=>$model->resume_id)),
	array('label'=>'Manage JobResumes', 'url'=>array('admin')),
);
?>

<h1>Update JobResumes <?php echo $model->resume_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>