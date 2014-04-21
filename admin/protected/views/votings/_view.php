<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry_id')); ?>:</b>
	<?php echo CHtml::encode($data->entry_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fb_user')); ?>:</b>
	<?php echo CHtml::encode($data->fb_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vote_time')); ?>:</b>
	<?php echo CHtml::encode($data->vote_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vote_date')); ?>:</b>
	<?php echo CHtml::encode($data->vote_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vote_value')); ?>:</b>
	<?php echo CHtml::encode($data->vote_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vote_type')); ?>:</b>
	<?php echo CHtml::encode($data->vote_type); ?>
	<br />

	*/ ?>

</div>