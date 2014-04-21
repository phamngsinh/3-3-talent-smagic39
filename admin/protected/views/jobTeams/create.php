<?php
/* @var $this JobTeamsController */
/* @var $model JobTeams */

$this->breadcrumbs=array(
	'Job Teams'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobTeams', 'url'=>array('index')),
	array('label'=>'Manage JobTeams', 'url'=>array('admin')),
);
?>

<h1>Create JobTeams</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>