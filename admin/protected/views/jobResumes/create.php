<?php
/* @var $this JobResumesController */
/* @var $model JobResumes */

$this->breadcrumbs=array(
	'Job Resumes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobResumes', 'url'=>array('index')),
	array('label'=>'Manage JobResumes', 'url'=>array('admin')),
);
?>

<h1>Create JobResumes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>