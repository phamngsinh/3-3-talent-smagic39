<?php
/* @var $this JobTestimonialsController */
/* @var $model JobTestimonials */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'job-testimonials-form',
        'enableAjaxValidation' => false,
         'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'descriptions'); ?>
        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'value'=>$model->descriptions,
            'attribute' => 'descriptions',
            'htmlOptions' => array('size' => 60, 'maxlength' => 255),
            'plugins' => array('safari'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'bold,italic,underline,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
        echo $form->error($model, 'descriptions');
        ?>

    </div>
    
    <div class="row">
        <?php if(isset($files)){?>
        <img src="<?php echo $files['uri']?>" width="64" height="64"/>
        <?php }?>
        <?php echo $form->labelEx($model, 'image_id'); ?>
        <?php echo $form->fileField($model, 'image_id',array('accept'=>'image/*')); ?>
        <?php echo $form->error($model, 'image_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->