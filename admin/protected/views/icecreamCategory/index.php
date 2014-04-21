<?php
$this->breadcrumbs=array(
	'Icecream Categories',
);

$this->menu=array(
	array('label'=>'Create IcecreamCategory', 'url'=>array('create')),
	array('label'=>'Manage IcecreamCategory', 'url'=>array('admin')),
);
?>

<h1>Icecream Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
