<?php
/* @var $this JobTestimonialUserController */
/* @var $model JobTestimonialUser */

$this->breadcrumbs=array(
	'Job Testimonial Users'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List JobTestimonialUser', 'url'=>array('index')),
	array('label'=>'Create JobTestimonialUser', 'url'=>array('create')),
	array('label'=>'Update JobTestimonialUser', 'url'=>array('update', 'id'=>$model->testimonial_user_id)),
	array('label'=>'Delete JobTestimonialUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->testimonial_user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobTestimonialUser', 'url'=>array('admin')),
);
?>

<h1>View JobTestimonialUser #<?php echo $model->testimonial_user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'testimonial_user_id',
		'fullname',
		'email',
		'content',
		'approved',
		'title',
		'image',
	),
)); ?>
