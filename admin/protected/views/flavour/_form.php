<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flavour-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'icecream_category_id'); ?>
		<?php echo $form->textField($model,'icecream_category_id'); ?>
		<?php echo $form->error($model,'icecream_category_id'); ?>
	</div>-->
   
   <div class="row">
  <?php echo $form->labelEx($model,'icecream_category_id'); ?>
  <?php 
                
                echo CHtml::dropDownList('Falvour[icecream_category_id]',$model->icecream_category_id, CHtml::listData(IcecreamCategory::model()->findAll(), 'icecream_category_id', 'icecream_title'),array('empty'=>'--please select--'));
                
                ?>
  <?php echo $form->error($model,'icecream_category_id'); ?>
       </div>
   
	<div class="row">
		<?php echo $form->labelEx($model,'flavout_title'); ?>
		<?php echo $form->textField($model,'flavout_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'flavout_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo CHtml::activeFileField($model, 'pic'); ?>
		<?php echo $form->error($model,'pic'); ?>
		<?php
	    
	    
	    if($model->pic)
	    {
		$pic = './uploads/188x200/' . $model->pic;
		echo '<br /><img src="'.$pic.'" />';
	    }
	    ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>
   
    
   
	<div class="row">
		<?php echo $form->labelEx($model,'Extra Photo'); ?>
		<?php echo CHtml::activeFileField($model, 'ingrediants'); ?>
		<?php
	    
	    
	    if($model->ingrediants)
	    {
		$ingrediants = './uploads/188x200/' . $model->ingrediants;
		echo '<br /><img src="'.$ingrediants.'" />';
	    }
	    ?>
		<?php echo $form->error($model,'ingrediants'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'nutritions'); ?>
		<?php echo $form->textArea($model,'nutritions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nutritions'); ?>
	</div>-->

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