<?php
/* @var $this JobEmployeesController */
/* @var $data JobEmployees */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employ_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employ_id), array('view', 'id'=>$data->employ_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>