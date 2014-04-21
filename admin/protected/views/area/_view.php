<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->area_id), array('view', 'id'=>$data->area_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_title')); ?>:</b>
	<?php echo CHtml::encode($data->area_title); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />-->


</div>