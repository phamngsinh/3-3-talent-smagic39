<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::encode($data->question_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option')); ?>:</b>
	<?php echo CHtml::encode($data->option); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_correct')); ?>:</b>
	<?php echo CHtml::encode($data->is_correct); ?>
	<br />


</div>