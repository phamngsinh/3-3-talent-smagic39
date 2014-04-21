<?php
/* @var $this JobAboutController */
/* @var $data JobAbout */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->about_id), array('view', 'id'=>$data->about_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />


</div>