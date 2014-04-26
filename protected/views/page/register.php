<style type="text/css">
    label {
        float: left;
    }
</style>

<h1>Apply Job Form</h1>

<div class="job-list">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'registration-form',
    'enableClientValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'apply-form'),
    'clientOptions' => array(
        'validateOnSubmit' => false,
    ),
        ));
?>
<div class="row" style="text-align: center">
    <h3><?php echo $job['title'] ?></h3>

    <p>Please complete the form below to apply for this position</p>
</div>
<div class="row">
    <?php echo $form->label($model, 'first_name'); ?>
    <?php echo $form->textField($model, 'first_name'); ?>
    <?php echo $form->error($model, 'first_name'); ?>
</div>
<br/>

<div class="row">
    <?php echo $form->label($model, 'last_name'); ?>
    <?php echo $form->textField($model, 'last_name'); ?>
    <?php echo $form->error($model, 'last_name'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
    <?php echo $form->error($model, 'email'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'phone'); ?>
    <?php echo $form->textField($model, 'phone'); ?>
    <?php echo $form->error($model, 'phone'); ?>
</div>
<br/>
<div class="row">
    <?php echo $form->label($model, 'mobile'); ?>
    <?php echo $form->textField($model, 'mobile'); ?>
    <?php echo $form->error($model, 'mobile'); ?>
</div>
<br/>
<div class="row">
    <label for="JobEmployees_file_id">Resume </label>
    <?php echo $form->fileField($model_file, 'file_id', array('accept' => '.pdf,.docs,.docx')); ?>
    <?php echo $form->error($model_file, 'file_id'); ?>
</div>
<br/>

<div class="row">
    <span class="check-inline">
        <?php echo $form->label($model, 'cover_note_id'); ?>
        <label for="coverNoteType0">
            <input checked="checked" id="coverNoteType0" name="JobEmployees[coverNoteType]" type="radio" value="Attach">Attach</label>
        <label for="coverNoteType1">
            <input id="coverNoteType1" name="JobEmployees[coverNoteType]" type="radio" value="WriteNow">Write
            now</label>
    </span>
</div>
<br/>
<div class="row" style="clear:both">
    <?php echo $form->fileField($cover, 'value', array('accept' => '.pdf,.docs,.docx','class'=>'show')); ?>
    <?php echo $form->textArea($cover, 'value', array('rows' => 6, 'cols' => 50,'class'=>'hiden', 'id' => 'CandidateCoverNote', 'maxlength' => "1000", 'style' => 'display: none')); ?>
    <div id="validate_cover_value" class="errorPrivate" style="display: none;">Please enter a value for Cover Note</div>

</div>
<br/>
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
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#JobEmployees_mobile").mask("(999) 999-9999");
        $("#JobEmployees_phone").mask("(999) 999-9999");


    });
</script>


