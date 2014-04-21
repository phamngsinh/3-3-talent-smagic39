<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); 




if(Yii::app()->user->getFlash('passwordChanged'))
{
    echo '<div class="flash-success">Your password <b>changed</b> successfully.</div>';
}


?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>
	-->
	

	

	
	
	<div class="row">
		<?php echo $form->labelEx($model,'current_password'); ?>
		<?php echo $form->passwordField($model,'current_password',array('size'=>60,'maxlength'=>100,'value'=>'')); ?>
		<?php echo $form->error($model,'current_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100,'value'=>'')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'retype_password'); ?>
		<?php echo $form->passwordField($model,'retype_password',array('size'=>60,'maxlength'=>100,'value'=>'')); ?>
		<?php echo $form->error($model,'retype_password'); ?>
	</div>
	<br />

	
	

		
		
	
		
		
		
		
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '  Create  ' : '  Save  ' ,  array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->