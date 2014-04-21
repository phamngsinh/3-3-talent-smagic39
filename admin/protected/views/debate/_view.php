<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debate_title')); ?>:</b>
	<?php echo CHtml::encode($data->debate_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favour_title')); ?>:</b>
	<?php echo CHtml::encode($data->favour_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favour_video')); ?>:</b>
	<?php echo CHtml::encode($data->favour_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favour_description')); ?>:</b>
	<?php echo CHtml::encode($data->favour_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('against_title')); ?>:</b>
	<?php echo CHtml::encode($data->against_title); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('against_description')); ?>:</b>
	<?php echo CHtml::encode($data->against_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('against_video')); ?>:</b>
	<?php echo CHtml::encode($data->against_video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expire_date')); ?>:</b>
	<?php echo CHtml::encode($data->expire_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_featured')); ?>:</b>
	<?php echo CHtml::encode($data->is_featured); ?>
	<br />

	*/ ?>

</div>