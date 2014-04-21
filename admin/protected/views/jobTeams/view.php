<?php
/* @var $this JobTeamsController */
/* @var $model JobTeams */

$this->breadcrumbs=array(
	'Job Teams'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobTeams', 'url'=>array('index')),
	array('label'=>'Create JobTeams', 'url'=>array('create')),
	array('label'=>'Update JobTeams', 'url'=>array('update', 'id'=>$model->teams_id)),
	array('label'=>'Delete JobTeams', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->teams_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobTeams', 'url'=>array('admin')),
);
?>

<h1>View JobTeams #<?php echo $model->teams_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'teams_id',
		'name',
		'positions',
		'descriptions',
		'link_twitter',
		'link_facebook',
		'link_email',
		'image_id',
	),
)); ?>
