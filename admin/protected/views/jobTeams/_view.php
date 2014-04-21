<?php
/* @var $this JobTeamsController */
/* @var $data JobTeams */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('teams_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->teams_id), array('view', 'id'=>$data->teams_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('positions')); ?>:</b>
	<?php echo CHtml::encode($data->positions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptions')); ?>:</b>
	<?php echo CHtml::encode($data->descriptions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->link_twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_facebook')); ?>:</b>
	<?php echo CHtml::encode($data->link_facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_email')); ?>:</b>
	<?php echo CHtml::encode($data->link_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	*/ ?>

</div>