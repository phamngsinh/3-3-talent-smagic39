<?php
/* @var $this JobLocationController */
/* @var $data JobLocation */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('job_location_id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->job_location_id), array('view', 'id' => $data->job_location_id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('fax_number')); ?>:</b>
    <?php echo CHtml::encode($data->fax_number); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('geo')); ?>:</b>
    <?php echo CHtml::encode($data->geo); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('map')); ?>:</b>
    <?php echo CHtml::encode($data->map); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('opening_hours_specification')); ?>:</b>
    <?php echo CHtml::encode($data->opening_hours_specification); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
    <?php echo CHtml::encode($data->telephone); ?>
    <br />


</div>