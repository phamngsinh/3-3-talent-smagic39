<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_detail_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->area_detail_id), array('view', 'id'=>$data->area_detail_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_detail_title')); ?>:</b>
	<?php echo CHtml::encode($data->area_detail_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block')); ?>:</b>
	<?php echo CHtml::encode($data->block); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::encode($data->area_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	*/ ?>

</div>