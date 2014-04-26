<h1>Contact Us</h1>

<div class="page-enquiry">       
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-us',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'contact-us'),
        'clientOptions' => array(
            'validateOnSubmit' => false,
        )
    ));
    ?>    
    <div class="enquiry-title">
        Your Name<span class="required" id="name"> * </span>
    </div>

    <div class="enquiry-box">
<?php echo $form->textField($model, 'name'); ?>
        <?php echo $form->error($model, 'name'); ?>

    </div>
    <div class="clear"></div>

    <div class="enquiry-title">
        Phone Number
    </div>

    <div class="enquiry-box">
<?php echo $form->textField($model, 'phone'); ?>
        <?php echo $form->error($model, 'phone'); ?>


    </div>
    <div class="clear"></div>

    <div class="enquiry-title">
        E-mail Address<span class="required" id="email"> * </span>
    </div>

    <div class="enquiry-box">
<?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>

    </div>
    <div class="clear"></div>

    <div class="enquiry-title">
        Your Enquiry<span class="required" id="Enquiry"> * </span>
    </div>

    <div class="enquiry-box">
<?php echo $form->textArea($model, 'content'); ?>
        <?php echo $form->error($model, 'content'); ?>

    </div>
    <div class="clear"></div>

    <div class="enquiry-box">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit', array('id' => 'add-contact')); ?>
        <!--<input type="reset" value="Cancel" onclick="location.href='index.php?r=page/index'">-->
    </div>                            

<?php $this->endWidget(); ?>

</div>
<!--home-enquiry-->
<?php
//    $this->renderPartial('_search_right', array(), FALSE, TRUE);
?>
<div class="page-enquiry-details">
<?php echo @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'ADMIN_CONTACT'))->value4_text); ?>
</div>
<!--page-enquiry-details-->
<div class="clear"></div>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>


