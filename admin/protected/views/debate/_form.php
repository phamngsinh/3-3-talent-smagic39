<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debate-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'debate_title'); ?>
		<?php echo $form->textField($model,'debate_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'debate_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo CHtml::activeFileField($model, 'image'); ?>
		<?php echo $form->error($model,'image'); ?>
		<?php
	    
	    
	    if($model->image)
	    {
		$image = './uploads/115x94/' . $model->image;
		echo '<br /><img src="'.$image.'" />';
	    }
	    ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'favour_title'); ?>
		<?php echo $form->textField($model,'favour_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'favour_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'favour_video'); ?>
		<?php echo $form->textField($model,'favour_video',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'favour_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'favour_description'); ?>
		<?php echo $form->textArea($model,'favour_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'favour_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'against_title'); ?>
		<?php echo $form->textField($model,'against_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'against_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'against_description'); ?>
		<?php echo $form->textArea($model,'against_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'against_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'against_video'); ?>
		<?php echo $form->textField($model,'against_video',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'against_video'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ip_address'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'expire_date'); ?>
		<?php echo $form->textField($model,'expire_date',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'expire_date'); ?>
	</div>-->
    
	<?php 
		
		//$model =  MS::model()->findByAttributes(array("var_name"=>"expire_date"));
		 echo $form->labelEx($model,'start_date');
		Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
	
	
	
        'attribute'=>'start_date', //attribute name
         'mode'=>'date', //use "time","date" or "datetime" (default)
        'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
	'language' => '',
	
	
	
    ));
?>
	
	<?php 
		
		//$model =  MS::model()->findByAttributes(array("var_name"=>"expire_date"));
		 echo $form->labelEx($model,'expire_date');
		Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    $this->widget('CJuiDateTimePicker',array(
        'model'=>$model, //Model object
	
	
	
        'attribute'=>'expire_date', //attribute name
         'mode'=>'date', //use "time","date" or "datetime" (default)
        'options'=>array("dateFormat"=>'yy-mm-dd'), // jquery plugin options
	'language' => '',
	
	
	
    ));
?>
	
	<div class="row">
		   <label class="required" for="Debate_is_featured">
			Is Featured
			<span class="required">*</span>
			</label>
			
			
			
		   <select name="Debate[is_featured]" id="Debate_is_featured">
		            <option <?php if($model->is_featured == 'normal'){ ?> selected="selected" <?php } ?> value="normal">Normal</option>
		   			<option <?php if($model->is_featured == 'feature'){ ?> selected="selected" <?php } ?> value="feature">Featured</option>
		   </select>
		   
	</div>
	
	<!--<div class="row">
		<?php echo $form->labelEx($model,'is_featured'); ?>
		<?php echo $form->textField($model,'is_featured'); ?>
		<?php echo $form->error($model,'is_featured'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->