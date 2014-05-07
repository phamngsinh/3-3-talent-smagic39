<?php
/* @var $this JobTestimonialUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Testimonial Users',
);

$this->menu=array(
	array('label'=>'Create JobTestimonialUser', 'url'=>array('create')),
	array('label'=>'Manage JobTestimonialUser', 'url'=>array('admin')),
);
?>

<h1>Job Testimonial Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
