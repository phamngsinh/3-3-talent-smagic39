<?php
/* @var $this JobTestimonialsController */
/* @var $model JobTestimonials */

$this->breadcrumbs=array(
	'Job Testimonials'=>array('index'),
	$model->title=>array('view','id'=>$model->testimonials_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobTestimonials', 'url'=>array('index')),
	array('label'=>'Create JobTestimonials', 'url'=>array('create')),
	array('label'=>'View JobTestimonials', 'url'=>array('view', 'id'=>$model->testimonials_id)),
	array('label'=>'Manage JobTestimonials', 'url'=>array('admin')),
);
?>

<h1>Update JobTestimonials <?php echo $model->testimonials_id; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model,'files'=>$files)); ?>