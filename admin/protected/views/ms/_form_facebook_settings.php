<style>
    .helpBox {
        display: none;
    }

    fieldset {
        line-height: 22px;
    }
</style>

<?php
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ms-form',
        'enableAjaxValidation' => false,
        'action' => 'index.php?r=ms/facebookSettings'
    )); ?>
    <style> .row {
            padding-top: 10px;
        } </style>


    <div class="row">
        <b>Application Title [APP_TITLE]</b> <br/>
        <input name="APP_DETAILS[value4_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value4_text); ?>">

    </div>

    <div class="row">
        <b>Application Details [APP_DETAILS]</b><br/>
        <input name="APP_DETAILS[value5_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value5_text); ?>">

        <div id="COMMON_MSGS_DIV" class="helpBox">
            <img src="images/COMMON_MSGS.jpg" style="padding:5px;"/>
        </div>

    </div>


    <br/>

    <div class="row">
        <b>Facebook Application ID/API Key (?)</b><br/>
        <input name="FACEBOOK_KEYS[value4_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value4_text); ?>">
    </div>
    <div class="row">
        <b>Facebook Application Secret Key (?)</b><br/>
        <input name="FACEBOOK_KEYS[value5_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value5_text); ?>">
    </div>
    <div class="row">
        <b>Facebook Page List, separate page by semicolon(;)</b><br/>
        <input name="APP_DETAILS[value1]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value1); ?>">
    </div>
    <div class="row">
        <b>Facebook Application Namespace (?)</b><br/>
        <input name="FACEBOOK_KEYS[value1]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value1); ?>">
    </div>

    <div class="row">
        <b>Facebook Permissions (?)</b><br/>
        <input name="FACEBOOK_KEYS[value2]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value2); ?>">
    </div>

    <br/>


    <div class="row">
        <b>Facebook Profile Tab URL [TAB_URL]</b><br/>
        <input name="FACEBOOK_URLS[value4_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value4_text); ?>">
    </div>


    <div class="row">
        <b>Facebook Canvas URL (?)</b><br/>
        <input name="FACEBOOK_URLS[value5_text]" size="80"
               value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value5_text); ?>">
    </div>


    <br/>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Update', array('class' => 'button grey small_btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->


<script>

    function conf(url, msg) {
        var cf = confirm(msg);

        if (cf) {
            document.location = url;
        }
    }


    function toggleStatusBox() {
        if ($("#APPLICATION_STATUS_value6_int").val() == 1) {
            $('#app_status_msg').slideUp();
        }
        else {
            $('#app_status_msg').slideDown();
        }
    }


    if ($("#APPLICATION_STATUS_value6_int").val() == 1) {
        $('#app_status_msg').slideUp();
    }
    else {
        $('#app_status_msg').slideDown();
    }


</script>