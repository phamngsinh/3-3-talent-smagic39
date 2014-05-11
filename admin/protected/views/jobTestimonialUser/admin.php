<?php
/* @var $this JobTestimonialUserController */
/* @var $model JobTestimonialUser */

$this->breadcrumbs=array(
	'Job Testimonial Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobTestimonialUser', 'url'=>array('index')),
	array('label'=>'Create JobTestimonialUser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-testimonial-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Testimonial Users</h1>

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
	'id'=>'job-testimonial-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'testimonial_user_id',
		'fullname',
		'email',
		'content',
                array(
                    'name'=>'approved',
                    'type'=>'raw',
                    'value'=> 'JobTestimonialUser::model()->getStatus($data->approved)',
                ),
		'title',
		/*
		'image',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
