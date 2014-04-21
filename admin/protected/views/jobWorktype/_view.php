<?php
/* @var $this JobWorktypeController */
/* @var $data JobWorktype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('worktype_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->worktype_id), array('view', 'id'=>$data->worktype_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>