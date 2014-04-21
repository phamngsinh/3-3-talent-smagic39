<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_category')); ?>:</b>
	<?php echo CHtml::encode($data->parent_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('display_order')); ?>:</b>
	<?php echo CHtml::encode($data->display_order); ?>
	<br />


</div>