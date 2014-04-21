<?php
$this->breadcrumbs=array(
	'Area Details',
);

$this->menu=array(
	array('label'=>'Create AreaDetail', 'url'=>array('create')),
	array('label'=>'Manage AreaDetail', 'url'=>array('admin')),
);
?>

<h1>Area Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
