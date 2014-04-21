<?php
/* @var $this JobWorktypeController */
/* @var $model JobWorktype */

$this->breadcrumbs=array(
	'Job Worktypes'=>array('index'),
	$model->name=>array('view','id'=>$model->worktype_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobWorktype', 'url'=>array('index')),
	array('label'=>'Create JobWorktype', 'url'=>array('create')),
	array('label'=>'View JobWorktype', 'url'=>array('view', 'id'=>$model->worktype_id)),
	array('label'=>'Manage JobWorktype', 'url'=>array('admin')),
);
?>

<h1>Update JobWorktype <?php echo $model->worktype_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>