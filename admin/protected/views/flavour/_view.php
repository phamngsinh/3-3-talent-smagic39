<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('flavour_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->flavour_id), array('view', 'id'=>$data->flavour_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icecream_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->icecream_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flavout_title')); ?>:</b>
	<?php echo CHtml::encode($data->flavout_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingrediants')); ?>:</b>
	<?php echo CHtml::encode($data->ingrediants); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('nutritions')); ?>:</b>
	<?php echo CHtml::encode($data->nutritions);*/ ?>
	<!--<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	*/ ?>

</div>