<?php
/* @var $this JobWorktypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Worktypes',
);

$this->menu=array(
	array('label'=>'Create JobWorktype', 'url'=>array('create')),
	array('label'=>'Manage JobWorktype', 'url'=>array('admin')),
);
?>

<h1>Job Worktypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
