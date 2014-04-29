<style type="text/css">
    label {
        float: left;
    }
</style>


<h1>Register Your CV</h1>
<div class="job-list">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'register-cv-form',
    'enableClientValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'register-cv-form'),
    'clientOptions' => array(
        'validateOnSubmit' => false,
    ),
        ));
?>

<div class="row">
    <?php echo $form->label($model, 'first_name'); ?>
    <?php echo $form->textField($model, 'first_name'); ?>
    <?php echo $form->error($model, 'first_name'); ?>
</div><br/>

<div class="row">
    <?php echo $form->label($model, 'last_name'); ?>
    <?php echo $form->textField($model, 'last_name'); ?>
    <?php echo $form->error($model, 'last_name'); ?>
</div><br/>
<div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
    <?php echo $form->error($model, 'email'); ?>
</div><br/>
<div class="row">
    <?php echo $form->label($model, 'mobile'); ?>
    <?php echo $form->textField($model, 'mobile'); ?>
    <?php echo $form->error($model, 'mobile'); ?>
</div><br/>


<div class="row">
    <label for="JobEmployees_file_id">Resume </label>
    <?php echo $form->fileField($model_file, 'file_id'); ?>
    <?php echo $form->error($model_file, 'file_id'); ?>

</div><br/>

<div class="row">
    <?php echo $form->label($model, 'linkedin_profile'); ?>
    <?php echo $form->textField($model, 'linkedin_profile'); ?>
    <?php echo $form->error($model, 'linkedin_profile'); ?>
</div><br/>



<div class="row buttons">
    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
<div class="clear"></div>
</div>

<?php 
    $this->renderPartial('_search_right', array(), FALSE, TRUE);
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/register-cv.js"></script>

<script type="text/javascript">
    $(function() {
        $("#JobEmployees_mobile").mask("(999) 999-9999");
        $("#JobEmployees_mobile").mask("(999) 999-9999");

    });
</script>

