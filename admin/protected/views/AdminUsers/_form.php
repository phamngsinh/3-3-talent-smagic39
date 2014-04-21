<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); 


if(Yii::app()->user->getFlash('userAlreadExists'))
{

    echo '<div class="flash-error">User <b>'.$model->username.'</b> already exists.</div>';
}


if(Yii::app()->user->getFlash('canNotAddSuperAdmin'))
{

    echo '<div class="flash-error">Only <b>Super Admin</b> can add super admins.</div>';
}

if(Yii::app()->user->getFlash('userUpdated'))
{
    echo '<div class="flash-success">User <b>'.$model->username.'</b> updated successfully.</div>';
}

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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

	

	

	<br />
	
	


	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100,'value'=>'')); ?>
		
		<br /> (leave it blank if you want to keep the old password)
		<?php echo $form->error($model,'password'); ?>
	</div>
	<br />

	
	
	
	<div class="row">
	<?php echo $form->labelEx($model,'role'); ?>
	<?php 		
	$data = array('operator'=>'Operator', 'admin'=>'Admin');		    		    
	echo CHtml::dropDownList('AdminUsers[role]', $model->role, $data);
	?>
	<?php echo $form->error($model,'role'); ?>
	</div><!-- row -->
		
		
		
		<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php 
		
		$data = array(1=>'Yes',0=>'No');
		    
		    
                echo CHtml::dropDownList('AdminUsers[is_active]', $model->is_active, $data);
                ?>
		<?php echo $form->error($model,'is_active'); ?>
		</div><!-- row -->
		
		
		
		<br />
		
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',  array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->