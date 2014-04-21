<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


		<?php echo $form->hiddenField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	
        
	
<?php 



$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'Page[details]',
		    
                    'id'=>'Page_details',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
                    'value' => $model->details, 
                 ));
             ?>
	
	
	
	
	
	
	
        
        <?php
        /*
        $this->widget('application.extensions.elrte.elRTE', array(
    'selector'=>'Page_details',
    'doctype' => '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">',
    'cssClass' => 'el-rte',
    'absoluteURLs' => 'false',
    'allowSource' => 'true',
    'styleWithCSS' => 'true',
    'height' => '500',
    'width' => '100%',
    'fmAllow' => 'true',
    'toolbar' => 'myToolbar'
    
    
    
 ));


*/
        
        
        ?>
	
	
	


		<?php echo $form->hiddenField($model,'display_order'); ?>
		<?php echo $form->error($model,'display_order'); ?>


        
		<?php echo $form->hiddenField($model,'added_by'); ?>
		<?php echo $form->error($model,'added_by'); ?>

        

       
		<?php echo $form->hiddenField($model,'added_on'); ?>
		<?php echo $form->error($model,'added_on'); ?>

            

        
		<?php echo $form->hiddenField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>

        

        
		<?php echo $form->hiddenField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	
        
	<br />
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->