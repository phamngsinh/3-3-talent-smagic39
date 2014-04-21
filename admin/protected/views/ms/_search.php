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
		<?php echo $form->label($model,'var_name'); ?>
		<?php echo $form->textField($model,'var_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value1'); ?>
		<?php echo $form->textField($model,'value1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value2'); ?>
		<?php echo $form->textField($model,'value2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value3'); ?>
		<?php echo $form->textField($model,'value3',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value4_text'); ?>
		<?php echo $form->textArea($model,'value4_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value5_text'); ?>
		<?php echo $form->textArea($model,'value5_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value6_int'); ?>
		<?php echo $form->textField($model,'value6_int'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value7_int'); ?>
		<?php echo $form->textField($model,'value7_int'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->