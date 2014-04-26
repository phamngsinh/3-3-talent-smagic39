<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */

$this->breadcrumbs=array(
	'Job Locations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobLocation', 'url'=>array('index')),
	array('label'=>'Create JobLocation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-location-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Locations</h1>

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
	'id'=>'job-location-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'job_location_id',
		'address',
		'fax_number',
		'city',
		'map',
		'opening_hours_specification',
		/*
		'telephone',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'item-class',
)); ?>
