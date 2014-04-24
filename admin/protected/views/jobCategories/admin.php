<?php
/* @var $this JobCategoriesController */
/* @var $model JobCategories */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobCategories', 'url'=>array('index')),
	array('label'=>'Create JobCategories', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-categories-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info" style="text-align: center;color:#0074c7">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<h1>Manage Job Categories</h1>

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
	'id'=>'job-categories-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cat_id',
		'cat_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'item-class'
)); ?>
