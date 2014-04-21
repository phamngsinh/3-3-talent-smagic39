<?php
/* @var $this JobTeamsController */
/* @var $model JobTeams */

$this->breadcrumbs=array(
	'Job Teams'=>array('index'),
	$model->name=>array('view','id'=>$model->teams_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobTeams', 'url'=>array('index')),
	array('label'=>'Create JobTeams', 'url'=>array('create')),
	array('label'=>'View JobTeams', 'url'=>array('view', 'id'=>$model->teams_id)),
	array('label'=>'Manage JobTeams', 'url'=>array('admin')),
);
?>

<h1>Update JobTeams <?php echo $model->teams_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'files'=>$files)); ?>