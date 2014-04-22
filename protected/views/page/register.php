<style type="text/css">
    label{
        float:left;
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
    <?php echo $form->label($model, 'resume_id'); ?>
    <?php echo $form->fileField($model, 'resume_id'); ?>
    <?php echo $form->error($model, 'resume_id'); ?>
</div>


<div class="row">
    <span class="check-inline">
        <?php echo $form->label($model, 'cover_note_id'); ?>
        <label for="coverNoteType0">Attach</label>
        <input checked="checked" id="coverNoteType0" name="JobEmployees[coverNoteType]" type="radio" value="Attach">
        <label for="coverNoteType1">Write now</label>
        <input id="coverNoteType1" name="JobEmployees[coverNoteType]" type="radio" value="WriteNow">
    </span>
        <?php echo $form->fileField($model, 'cover_id',array('htmlOptions'=>'display: inline-block;')); ?>
        <textarea id="CandidateCoverNote" maxlength="1000" name="JobEmployees[CandidateCoverNote]" rows="4" style="display: none;"></textarea>

</div>

<div class="row buttons">
    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
<div class="clear"></div>

