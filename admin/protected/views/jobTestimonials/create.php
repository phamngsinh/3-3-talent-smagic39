<?php
/* @var $this JobTestimonialsController */
/* @var $model JobTestimonials */

$this->breadcrumbs=array(
	'Job Testimonials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobTestimonials', 'url'=>array('index')),
	array('label'=>'Manage JobTestimonials', 'url'=>array('admin')),
);
?>

<h1>Create JobTestimonials</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>