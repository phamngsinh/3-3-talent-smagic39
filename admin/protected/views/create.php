<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-location-create-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone'); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax_number'); ?>
		<?php echo $form->textField($model,'fax_number'); ?>
		<?php echo $form->error($model,'fax_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'geo'); ?>
		<?php echo $form->textField($model,'geo'); ?>
		<?php echo $form->error($model,'geo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'map'); ?>
		<?php echo $form->textField($model,'map'); ?>
		<?php echo $form->error($model,'map'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opening_hours_specification'); ?>
		<?php echo $form->textField($model,'opening_hours_specification'); ?>
		<?php echo $form->error($model,'opening_hours_specification'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->