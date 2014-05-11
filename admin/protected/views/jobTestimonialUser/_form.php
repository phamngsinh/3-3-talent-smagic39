<?php
/* @var $this JobTestimonialUserController */
/* @var $model JobTestimonialUser */
/* @var $form CActiveForm */
?>

<div class="form">
<?php if ($uploaded): ?>
    <p>File was uploaded. Check <?php echo $dir ?>.</p>
<?php endif ?>
<?php 
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'job-testimonial-user-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php echo $form->label($model, 'fullname') ?>
                <?php echo $form->textField($model, 'fullname'); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
                <?php echo $form->label($model, 'title'); ?>
                <?php echo $form->textField($model, 'title'); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
        <div class="row">
            <?php echo $form->label($model, 'email'); ?>
            <?php echo $form->textField($model, 'email'); ?>
        </div>
	<div class="row">
                <?php echo $form->label($model, 'content'); ?>
                <?php echo $form->textArea($model, 'content', array('rows' => 10, 'cols' => 105)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<div class="row">
                <?php echo $form->label($model, 'image'); ?>
                <?php echo $form->fileField($model, 'image', array('accept' => 'image/png,image/gif,image/jpeg,image/jpeg')); ?>
		<?php echo $form->error($model,'image'); ?>
                <?php if($model->isNewRecord!='1'){ ?>
                    <?php echo CHtml::image('protected/'.$model->image,"image",array("width"=>100)); ?>
                    <p style="color: #0066ff;"><i>choose another image replace image current</i></p>
                   <?php echo $form->hiddenField($model,'image_hidden',array('type'=>"hidden",'size'=>2,'maxlength'=>2, 'value'=>$model->image)); ?>

               <?php } ?>
	</div>
        <?php if($model->isNewRecord!='1'){ ?>
            <div class="row">
                <?php echo $form->label($model, 'approved'); ?>
                <?php echo $form->dropDownList($model, 'approved', array(0=>'No', 1=>'Yes')); ?>
            </div>
        <?php } ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->