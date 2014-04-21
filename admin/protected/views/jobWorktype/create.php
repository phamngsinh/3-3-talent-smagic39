<?php
/* @var $this JobWorktypeController */
/* @var $model JobWorktype */

$this->breadcrumbs=array(
	'Job Worktypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobWorktype', 'url'=>array('index')),
	array('label'=>'Manage JobWorktype', 'url'=>array('admin')),
);
?>

<h1>Create JobWorktype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>