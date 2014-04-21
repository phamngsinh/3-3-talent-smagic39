<?php
/* @var $this JobEmployeesController */
/* @var $data JobEmployees */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employ_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employ_id), array('view', 'id'=>$data->employ_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>