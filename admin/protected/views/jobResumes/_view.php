<?php
/* @var $this JobResumesController */
/* @var $data JobResumes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('resume_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->resume_id), array('view', 'id'=>$data->resume_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employ_id')); ?>:</b>
	<?php echo CHtml::encode($data->employ_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::encode($data->file_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coverletter')); ?>:</b>
	<?php echo CHtml::encode($data->coverletter); ?>
	<br />


</div>