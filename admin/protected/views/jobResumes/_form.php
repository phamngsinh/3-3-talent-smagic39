<?php
/* @var $this JobResumesController */
/* @var $model JobResumes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-resumes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employ_id'); ?>
		<?php echo $form->textField($model,'employ_id'); ?>
		<?php echo $form->error($model,'employ_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_id'); ?>
		<?php echo $form->textField($model,'job_id'); ?>
		<?php echo $form->error($model,'job_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_id'); ?>
		<?php echo $form->textField($model,'file_id'); ?>
		<?php echo $form->error($model,'file_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coverletter'); ?>
		<?php echo $form->textField($model,'coverletter',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'coverletter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->