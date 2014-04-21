<?php
/* @var $this JobTeamsController */
/* @var $model JobTeams */

$this->breadcrumbs=array(
	'Job Teams'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobTeams', 'url'=>array('index')),
	array('label'=>'Create JobTeams', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-teams-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Teams</h1>

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
	'id'=>'job-teams-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'teams_id',
		'name',
		'positions',
		'descriptions',
		'link_twitter',
		'link_facebook',
		/*
		'link_email',
		'image_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>