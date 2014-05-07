<?php
/* @var $this JobTestimonialsController */
/* @var $model JobTestimonials */

$this->breadcrumbs=array(
	'Job Testimonials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobTestimonials', 'url'=>array('index')),
	array('label'=>'Create JobTestimonials', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-testimonials-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Testimonials</h1>

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
	'id'=>'job-testimonials-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'testimonials_id',
		'title',
		'descriptions',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<h1>Testimonials Users</h1>
<?php 
// custom button
$temp = '{view}{update}{delete}'
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-testimonials-user-grid',
	'dataProvider'=>$testimonial->search(),
	'filter'=>$testimonial,
	'columns'=>array(
		'testimonial_user_id',
                array(
                     'name'=>'image',
                     'type'=>'raw',
                     'value'=>'"<img src=\"".$data->image."\" width=\"50\" height=\"50\"/>"'
                 ),
		'fullname',
		'email',
		array(
			'class'=>'CButtonColumn',
                        'template' => $temp,
                        'htmlOptions'=> array(),// adding css class and id here
                        'buttons' => array(
                             'view'=>array( // url call
                                'url'=>"CHtml::normalizeUrl(array('JobTestimonialUser/view', 'id'=>\$data->testimonial_user_id))",
                           ),
                           'update' => array( // url call
                                 'url'=>"CHtml::normalizeUrl(array('JobTestimonialUser/update', 'id'=>\$data->testimonial_user_id))",
                           ),
                           'delete' => array( // url call
                                 'url'=>"CHtml::normalizeUrl(array('JobTestimonialUser/delete', 'id'=>\$data->testimonial_user_id))",
                           ),
                        )
		),
	),
)); ?>
