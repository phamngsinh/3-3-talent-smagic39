<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ms-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'var_name'); ?>
		<?php echo $form->textField($model,'var_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'var_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value1'); ?>
		<?php echo $form->textField($model,'value1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'value1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value2'); ?>
		<?php echo $form->textField($model,'value2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'value2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value3'); ?>
		<?php echo $form->textField($model,'value3',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'value3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value4_text'); ?>
		<?php echo $form->textArea($model,'value4_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'value4_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value5_text'); ?>
		<?php echo $form->textArea($model,'value5_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'value5_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value6_int'); ?>
		<?php echo $form->textField($model,'value6_int'); ?>
		<?php echo $form->error($model,'value6_int'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value7_int'); ?>
		<?php echo $form->textField($model,'value7_int'); ?>
		<?php echo $form->error($model,'value7_int'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->