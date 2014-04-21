<?php
$this->breadcrumbs=array(
	'Area Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AreaDetail', 'url'=>array('index')),
	array('label'=>'Create AreaDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('area-detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Area Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'area-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'area_detail_id',
		'area_detail_title',
		'block',
		'address',
		'zip_code',
		'phone',
		/*
		'area_id',
		'date',
		'ip_address',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
)); ?>
