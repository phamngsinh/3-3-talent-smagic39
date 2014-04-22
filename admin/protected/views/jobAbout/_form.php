<?php
/* @var $this JobAboutController */
/* @var $model JobAbout */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'job-about-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>



    <div class="row">
        <?php echo $form->labelEx($model, 'content'); ?>

        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'name' => 'JobAbout[content]',
            'htmlOptions' => array('rows' => 20, 'cols' => 50, 'class' => 'tinymce'),
            'plugins' => array('filemanager', 'imagemanager', 'safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advimage', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'insertdatetime', 'preview', 'media', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
            ),
            'value' => @CHtml::decode($data),
        ));
        ?>
        <?php echo $form->error($model, 'content'); ?>


    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->