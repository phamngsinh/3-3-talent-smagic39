<?php if ($uploaded): ?>
    <p>File was uploaded. Check <?php echo $dir ?>.</p>
<?php endif ?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'add-testimonial',
      'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

<div class="row">
    <?php echo $form->label($model, 'fullname') ?>
    <?php echo $form->textField($model, 'fullname'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'title'); ?>
    <?php echo $form->textField($model, 'title'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'image'); ?>
    <?php echo $form->fileField($model, 'image', array('accept' => 'image/png,image/gif,image/jpeg,image/jpeg')); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'content'); ?>
    <?php echo $form->textArea($model, 'content', array('rows' => 10, 'cols' => 90)); ?>
</div>
<br/>
<?php echo CHtml::submitButton('Submit'); ?>
<div class="row submit">
    <?php $this->endWidget(); ?>
</div>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/add-testimonial.js"></script>