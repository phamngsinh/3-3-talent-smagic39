<?php
/* @var $this JobAboutController */
/* @var $model JobAbout */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-about-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
                <?php $this->widget('application.extensions.tinymce.ETinyMce',
                    array(
                        'model'=>$model,
                        'attribute'=>'content',
                        'editorTemplate'=>'full',
                        'htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'tinymce'),
                        )); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->