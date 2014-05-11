<?php
/* @var $this JobTestimonialUserController */
/* @var $model JobTestimonialUser */

$this->breadcrumbs=array(
	'Job Testimonial Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobTestimonialUser', 'url'=>array('index')),
	array('label'=>'Manage JobTestimonialUser', 'url'=>array('admin')),
);
?>

<h1>Create Job Testimonial</h1>

<?php echo $this->renderPartial('_form', array(
                                'model'=>$model, 
                                'uploaded' => $uploaded,
                                'dir' => $dir,
                )); ?>