<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'options-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
		<?php echo $form->error($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'option'); ?>
		<?php echo $form->textArea($model,'option',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'option'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_correct'); ?>
		<?php echo $form->textField($model,'is_correct'); ?>
		<?php echo $form->error($model,'is_correct'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->