<style>
    .helpBox{
        display:none;
    }
    fieldset{
        line-height:22px;
    }
</style>

<?php
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ms-form',
        'enableAjaxValidation' => false,
    ));
    ?>
    <style> .row{padding-top: 10px;} </style>



    <div class="row" style="display:none;" id="app_status_msg">
        <b>Header</b><br />

        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'name' => 'ADMIN_CONTACT[admin_contact]',
            'id' => 'ADMIN_CONTACT',
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
            'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'ADMIN_CONTACT'))->value4_text),
        ));
        ?>
    </div>     

    <br />


    <div class="row buttons">
<?php echo CHtml::submitButton('Update', array('class' => 'button grey small_btn')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>

    function conf(url, msg)
    {
        var cf = confirm(msg);

        if (cf)
        {
            document.location = url;
        }
    }


    function toggleStatusBox()
    {
        if ($("#PRELIKE_PAGE_value1").val() == 'Disable')
        {
            $('#app_status_msg').slideUp();
        }
        else
        {
            $('#app_status_msg').slideDown();
        }
    }


    toggleStatusBox();

</script>