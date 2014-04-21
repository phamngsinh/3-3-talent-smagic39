<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('var_name')); ?>:</b>
	<?php echo CHtml::encode($data->var_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value1')); ?>:</b>
	<?php echo CHtml::encode($data->value1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value2')); ?>:</b>
	<?php echo CHtml::encode($data->value2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value3')); ?>:</b>
	<?php echo CHtml::encode($data->value3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value4_text')); ?>:</b>
	<?php echo CHtml::encode($data->value4_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value5_text')); ?>:</b>
	<?php echo CHtml::encode($data->value5_text); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('value6_int')); ?>:</b>
	<?php echo CHtml::encode($data->value6_int); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value7_int')); ?>:</b>
	<?php echo CHtml::encode($data->value7_int); ?>
	<br />

	*/ ?>

</div>