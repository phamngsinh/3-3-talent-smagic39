<?php
$this->breadcrumbs=array(
	'Page Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Page Category', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('page-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Page Categories</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'parent_category',
		'display_order',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
