<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'area-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'area_detail_title'); ?>
		<?php echo $form->textField($model,'area_detail_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'area_detail_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'block'); ?>
		<?php echo $form->textField($model,'block',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'block'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>
		<?php echo $form->textField($model,'area_id'); ?>
		<?php echo $form->error($model,'area_id'); ?>
	</div>
   
   <div class="row">
  <?php echo $form->labelEx($model,'area_id'); ?>
  <?php 
                
                echo CHtml::dropDownList('AreaDetail[area_id]',$model->area_id, CHtml::listData(Area::model()->findAll(), 'area_id', 'area_title'),array('empty'=>'--please select--'));
                
                ?>
  <?php echo $form->error($model,'area_id'); ?>
       </div>
   
   
	<!--<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ip_address'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->