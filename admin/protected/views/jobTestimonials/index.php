<?php
/* @var $this JobTestimonialsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Testimonials',
);

$this->menu=array(
	array('label'=>'Create JobTestimonials', 'url'=>array('create')),
	array('label'=>'Manage JobTestimonials', 'url'=>array('admin')),
);
?>

<h1>Job Testimonials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
