<?php
$this->breadcrumbs=array(
	'Flavours'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Flavour', 'url'=>array('index')),
	array('label'=>'Create Flavour', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('flavour-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Flavours</h1>

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
	'id'=>'flavour-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'flavour_id',
		array(   
	    'header'=>'Category',
	    'type'=>'raw',
	    'value'=>'$data->fc->icecream_title',

	    ),
		'flavout_title',
		//'pic',
		array(   
	    'header'=>'pic',
	    'type'=>'raw',
	    'value'=>array($model,'showEntryPhoto'),

	    ),
		'detail',
		//'ingrediants',
		array(   
	    'header'=>'Ingrediants',
	    'type'=>'raw',
	    'value'=>array($model,'showingrediantPhoto'),

	    ),
		/*'nutritions',*/
		'date',
		'ip_address',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	
	 'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
	
)); ?>
