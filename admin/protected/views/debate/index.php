<?php
$this->breadcrumbs=array(
	'Debates',
);

$this->menu=array(
	array('label'=>'Create Debate', 'url'=>array('create')),
	array('label'=>'Manage Debate', 'url'=>array('admin')),
);
?>

<h1>Debates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
