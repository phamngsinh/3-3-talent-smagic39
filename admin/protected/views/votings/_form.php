<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'votings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_id'); ?>
		<?php echo $form->textField($model,'entry_id'); ?>
		<?php echo $form->error($model,'entry_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fb_user'); ?>
		<?php echo $form->textField($model,'fb_user',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fb_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ip_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vote_time'); ?>
		<?php echo $form->textField($model,'vote_time',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vote_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vote_date'); ?>
		<?php echo $form->textField($model,'vote_date'); ?>
		<?php echo $form->error($model,'vote_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vote_value'); ?>
		<?php echo $form->textField($model,'vote_value'); ?>
		<?php echo $form->error($model,'vote_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vote_type'); ?>
		<?php echo $form->textField($model,'vote_type'); ?>
		<?php echo $form->error($model,'vote_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->