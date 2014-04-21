<?php
/* @var $this JobTeamsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Teams',
);

$this->menu=array(
	array('label'=>'Create JobTeams', 'url'=>array('create')),
	array('label'=>'Manage JobTeams', 'url'=>array('admin')),
);
?>

<h1>Job Teams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
