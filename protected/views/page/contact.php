<h1>Contact Us</h1>

<div class="page-enquiry">       
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-us',
        'enableAjaxValidation' => false,
    ));
    ?>    
    <?php echo $form->errorSummary($model); ?>
    <div class="enquiry-title">
        Your Name<span class="required"> * </span>
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
        E-mail Address<span class="required"> * </span>
    </div>

    <div class="enquiry-box">
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>

    </div>
    <div class="clear"></div>

    <div class="enquiry-title">
        Your Enquiry<span class="required"> * </span>
    </div>

    <div class="enquiry-box">
        <?php echo $form->textArea($model, 'content'); ?>
      <?php echo $form->error($model, 'phone'); ?>

    </div>
    <div class="clear"></div>

    <div class="enquiry-box">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <input name="" type="button" value="Cancel">
    </div>                            

    <?php $this->endWidget(); ?>

</div>
<!--home-enquiry-->

<div class="page-enquiry-details">
    <?php echo $ms;?>
</div>
<!--page-enquiry-details-->
<div class="clear"></div>