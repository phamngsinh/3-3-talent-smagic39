<?php
$this->breadcrumbs=array(
	'Votings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Votings', 'url'=>array('index')),
	array('label'=>'Create Votings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('votings-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Votings</h1>

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

<?php

 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'votings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		 array(
	    'header'=>'Debate',
	    'value'=>'$data->de->debate_title',
	    ),
		//'user_id',
		array(   
	    'header'=>'User',
	    'type'=>'raw',
	    'value'=>array($model,'showUserImage'),

	    ),
		'ip_address',
		//'vote_time',
		/*
		'vote_date',
		'vote_value',*/
		
		
		
		array(
	    'header'=>'Vote Type',
	    'value'=>array($model,'vote_type'),
	    ),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
)); ?>
