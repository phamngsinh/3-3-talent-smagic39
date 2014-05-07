<?php
/* @var $this JobTestimonialUserController */
/* @var $model JobTestimonialUser */

$this->breadcrumbs=array(
	'Job Testimonial Users'=>array('index'),
	$model->title=>array('view','id'=>$model->testimonial_user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobTestimonialUser', 'url'=>array('index')),
	array('label'=>'Create JobTestimonialUser', 'url'=>array('create')),
	array('label'=>'View JobTestimonialUser', 'url'=>array('view', 'id'=>$model->testimonial_user_id)),
	array('label'=>'Manage JobTestimonialUser', 'url'=>array('admin')),
);
?>

<h1>Update JobTestimonialUser <?php echo $model->testimonial_user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>