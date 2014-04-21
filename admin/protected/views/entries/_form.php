<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fb_user'); ?>
		<?php echo $form->textField($model,'fb_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fb_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textArea($model,'details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_votes'); ?>
		<?php echo $form->textField($model,'total_votes'); ?>
		<?php echo $form->error($model,'total_votes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_views'); ?>
		<?php echo $form->textField($model,'total_views'); ?>
		<?php echo $form->error($model,'total_views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_comments'); ?>
		<?php echo $form->textField($model,'total_comments'); ?>
		<?php echo $form->error($model,'total_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_downloads'); ?>
		<?php echo $form->textField($model,'total_downloads'); ?>
		<?php echo $form->error($model,'total_downloads'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->textField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'display_order'); ?>
		<?php echo $form->textField($model,'display_order'); ?>
		<?php echo $form->error($model,'display_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->