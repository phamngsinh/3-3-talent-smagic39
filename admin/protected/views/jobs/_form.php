<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
/**
 * @author smagic39 <smagic39@gmail.com>
 */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'jobs-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
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
        <?php echo $form->labelEx($model, 'cat_id'); ?>
        <?php
        echo $form->dropDownList($model, 'cat_id', $categories, array(
            'prompt' => '-- select categories --',
            'selected' => true,
        ));
        ?>
        <?php echo $form->error($model, 'cat_id'); ?>
       <?php echo CHtml::link('Create Categories',array('JobCategories/create'),array('target'=>'_blank')); ?>

    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'worktype_id'); ?>
        <?php
        echo $form->dropDownList($model, 'worktype_id', $worktype, array(
            'prompt' => '-- select work type --',
            'selected' => true,
        ));
        ?>
        <?php echo $form->error($model, 'cat_id'); ?>
       <?php echo CHtml::link('Create Work type',array('JobWorktype/create'),array('target'=>'_blank')); ?>

    </div>
    

    <div class="row">
        <?php echo $form->labelEx($model, 'job_location_id'); 
       
        echo $form->dropDownList($model, 'job_location_id', $location, array(
            'prompt' => '-- select job location --',
            'selected' => true,
        ));
        
       echo $form->error($model, 'job_location_id'); ?>
        <?php echo CHtml::link('Create Location',array('JobLocation/create'),array('target'=>'_blank')); ?>
    </div>
    <div class="row">
        <?php
// currency symbol
        $locale = CLocale::getInstance('pl_PL');
        $symbol = $locale->getCurrencySymbol('USD');
        ?>
        <?php echo $form->labelEx($model, 'base_salary'); ?>
        <?php
        echo $form->textField($model, 'base_salary');
        echo $symbol;
        ?>
        <?php echo $form->error($model, 'base_salary'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'descriptions'); ?>
        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'attribute' => 'descriptions',
            'htmlOptions' => array('size' => 60),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
        echo $form->error($model, 'descriptions');
        ?>

    </div>



    <div class="row">
        <?php echo $form->labelEx($model, 'benefits'); ?>
        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'attribute' => 'benefits',
            'htmlOptions' => array('size' => 60),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
        echo $form->error($model, 'benefits');
        ?>
        <?php echo $form->error($model, 'benefits'); ?>
    </div>
<div class="row">
        <?php echo $form->labelEx($model, 'experience_requirements'); ?>
        <?php
              $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'attribute' => 'experience_requirements',
            'htmlOptions' => array('size' => 60),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
        
        ?>
        <?php echo $form->error($model, 'experience_requirements'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'incentives');
                 $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'attribute' => 'incentives',
            'htmlOptions' => array('size' => 60),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
         echo $form->error($model, 'incentives'); ?>
    </div>
    <div class="row">
        <?php
        echo $form->labelEx($model, 'date_posted');
        echo $form->textField($model, 'date_posted' );
        echo $form->error($model, 'date_posted'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'education_requirements');
                 $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'attribute' => 'education_requirements',
            'htmlOptions' => array('size' => 60),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
         echo $form->error($model, 'education_requirements'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'responsibilities'); ?>
        <?php echo $form->textField($model, 'responsibilities', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'responsibilities'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'special_commitments'); ?>
        <?php echo $form->textField($model, 'special_commitments', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'special_commitments'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/jquery-ui.css');
$cs->registerScriptFile($baseUrl . '/js/jquery-ui.min.js');
$cs->registerScriptFile($baseUrl . '/js/jobs.js');
?>