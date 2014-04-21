<?php
$this->breadcrumbs=array(
	'Votings',
);

$this->menu=array(
	array('label'=>'Create Votings', 'url'=>array('create')),
	array('label'=>'Manage Votings', 'url'=>array('admin')),
);
?>

<h1>Votings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
