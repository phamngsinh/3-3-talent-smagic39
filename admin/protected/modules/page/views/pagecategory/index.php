<?php
$this->breadcrumbs=array(
	'Page Categories',
);

$this->menu=array(
	array('label'=>'Create PageCategory', 'url'=>array('create')),
	array('label'=>'Manage PageCategory', 'url'=>array('admin')),
);
?>

<h1>Page Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
