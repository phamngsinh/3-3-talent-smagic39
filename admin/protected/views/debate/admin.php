<?php
$this->breadcrumbs=array(
	'Debates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Debate', 'url'=>array('index')),
	array('label'=>'Create Debate', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debate-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debates</h1>

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
	'id'=>'debate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'debate_title',
		'image',
		'favour_title',
		//'favour_video',
		//'favour_description',
		
		'against_title',
		//'against_description',
		//'against_video',
		//'ip_address',
		'start_date',
		'expire_date',
		'is_featured',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
)); ?>
