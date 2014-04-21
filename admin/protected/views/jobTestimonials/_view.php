<?php
/* @var $this JobTestimonialsController */
/* @var $data JobTestimonials */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('testimonials_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->testimonials_id), array('view', 'id'=>$data->testimonials_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />


</div>