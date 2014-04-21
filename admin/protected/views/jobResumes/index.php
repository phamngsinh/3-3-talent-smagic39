<?php
/* @var $this JobResumesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Resumes',
);

$this->menu=array(
	array('label'=>'Create JobResumes', 'url'=>array('create')),
	array('label'=>'Manage JobResumes', 'url'=>array('admin')),
);
?>

<h1>Job Resumes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
