<style type="text/css">
    label {
        float: left;
    }
</style>
<h1>Apply Job Form</h1>
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
<div class="row" style="text-align: center">
    <h3><?php echo $job['title'] ?></h3>

    <p>Please complete the form below to apply for this position</p>
</div>
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
    <?php echo $form->label($model, 'phone'); ?>
    <?php echo $form->textField($model, 'phone'); ?>
    <?php echo $form->error($model, 'phone'); ?>
</div>
<div class="row">
    <?php echo $form->label($model, 'mobile'); ?>
    <?php echo $form->textField($model, 'mobile'); ?>
    <?php echo $form->error($model, 'mobile'); ?>
</div>

<div class="row">
    <?php echo $form->label($model_file, 'resume_id'); ?>
    <?php echo $form->fileField($model_file, 'resume_id'); ?>
    <?php echo $form->error($model_file, 'resume_id'); ?>
</div>


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
<div class="row" style="clear:both">

    <?php echo $form->fileField($model, 'cover_id'); ?>
    <textarea id="CandidateCoverNote" maxlength="1000" name="JobEmployees[CandidateCoverNote]" rows="4" cols="50"
              style="display: none;"></textarea>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
<div class="clear"></div>

