<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entry_id'); ?>
		<?php echo $form->textField($model,'entry_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fb_user'); ?>
		<?php echo $form->textField($model,'fb_user',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vote_time'); ?>
		<?php echo $form->textField($model,'vote_time',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vote_date'); ?>
		<?php echo $form->textField($model,'vote_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vote_value'); ?>
		<?php echo $form->textField($model,'vote_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vote_type'); ?>
		<?php echo $form->textField($model,'vote_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->