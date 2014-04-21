<?php
/* @var $this JobContactusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Contactuses',
);

$this->menu=array(
	array('label'=>'Create JobContactus', 'url'=>array('create')),
	array('label'=>'Manage JobContactus', 'url'=>array('admin')),
);
?>

<h1>Job Contactuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
