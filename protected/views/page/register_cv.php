<style type="text/css">
    label {
        float: left;
    }
</style>


<h1>Register Your CV</h1>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'registration-form',
    'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>

<div class="row">
    <?php echo $form->label($model, 'first_name'); ?>
    <?php echo $form->textField($model, 'first_name'); ?>
    <?php echo $form->error($model, 'first_name'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'last_name'); ?>
    <?php echo $form->textField($model, 'last_name'); ?>
    <?php echo $form->error($model, 'last_name'); ?>
</div>
<div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
    <?php echo $form->error($model, 'email'); ?>
</div>
<div class="row">
    <?php echo $form->label($model, 'mobile'); ?>
    <?php echo $form->textField($model, 'mobile'); ?>
    <?php echo $form->error($model, 'mobile'); ?>
</div>


<div class="row">
    <label for="JobEmployees_file_id">Resume </label>
    <?php echo $form->fileField($model_file, 'file_id', array('accept' => '.pdf,.docs,.docx')); ?>
    <?php echo $form->error($model_file, 'file_id'); ?>

</div>

<div class="row">
    <?php echo $form->label($model, 'linkedin_profile'); ?>
    <?php echo $form->textField($model, 'linkedin_profile'); ?>
    <?php echo $form->error($model, 'linkedin_profile'); ?>
</div>



<div class="row buttons">
    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
<div class="clear"></div>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#JobEmployees_mobile").mask("(999) 999-9999");
        $("#JobEmployees_mobile").mask("(999) 999-9999");

    });
</script>

