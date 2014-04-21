<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('icecream_category_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->icecream_category_id), array('view', 'id'=>$data->icecream_category_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icecream_title')); ?>:</b>
	<?php echo CHtml::encode($data->icecream_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />


</div>