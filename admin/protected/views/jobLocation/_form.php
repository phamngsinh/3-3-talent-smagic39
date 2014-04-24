<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-location-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'fax_number'); ?>
		<?php echo $form->textField($model,'fax_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fax_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'geo'); ?>
		<?php echo $form->textField($model,'geo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'geo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'map'); ?>
		<?php echo $form->textField($model,'map',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'map'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opening_hours_specification'); ?>
		<?php echo $form->textField($model,'opening_hours_specification',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'opening_hours_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->