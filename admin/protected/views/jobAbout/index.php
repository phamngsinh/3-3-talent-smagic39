<?php
/* @var $this JobAboutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Abouts',
);

$this->menu=array(
	array('label'=>'Create JobAbout', 'url'=>array('create')),
	array('label'=>'Manage JobAbout', 'url'=>array('admin')),
);
?>

<h1>Job Abouts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
