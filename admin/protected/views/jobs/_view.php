<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->job_id), array('view', 'id'=>$data->job_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
	<?php echo CHtml::encode($data->cat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_salary')); ?>:</b>
	<?php echo CHtml::encode($data->base_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('benefits')); ?>:</b>
	<?php echo CHtml::encode($data->benefits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_posted')); ?>:</b>
	<?php echo CHtml::encode($data->date_posted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education_requirements')); ?>:</b>
	<?php echo CHtml::encode($data->education_requirements); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience_requirements')); ?>:</b>
	<?php echo CHtml::encode($data->experience_requirements); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hiring_organization_id')); ?>:</b>
	<?php echo CHtml::encode($data->hiring_organization_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incentives')); ?>:</b>
	<?php echo CHtml::encode($data->incentives); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('industry')); ?>:</b>
	<?php echo CHtml::encode($data->industry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_location_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifications')); ?>:</b>
	<?php echo CHtml::encode($data->qualifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibilities')); ?>:</b>
	<?php echo CHtml::encode($data->responsibilities); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('skills')); ?>:</b>
	<?php echo CHtml::encode($data->skills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_commitments')); ?>:</b>
	<?php echo CHtml::encode($data->special_commitments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_hours')); ?>:</b>
	<?php echo CHtml::encode($data->work_hours); ?>
	<br />

	*/ ?>

</div>