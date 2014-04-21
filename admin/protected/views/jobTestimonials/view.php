<?php
/* @var $this JobTestimonialsController */
/* @var $model JobTestimonials */

$this->breadcrumbs=array(
	'Job Testimonials'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List JobTestimonials', 'url'=>array('index')),
	array('label'=>'Create JobTestimonials', 'url'=>array('create')),
	array('label'=>'Update JobTestimonials', 'url'=>array('update', 'id'=>$model->testimonials_id)),
	array('label'=>'Delete JobTestimonials', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->testimonials_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobTestimonials', 'url'=>array('admin')),
);
?>

<h1>View JobTestimonials #<?php echo $model->testimonials_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'testimonials_id',
		'image_id',
		'title',
		'descriptions',
	),
)); ?>
