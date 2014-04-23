<?php
/**
 * User: sinhpn
 * Date: 4/23/14
 * Time: 6:42 AM
 */
?>
<style>
    label{
        float:left;
    }
</style>
<h1>Sign Up for Job Alerts</h1>
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
    <h3>Your Details</h3>
    <?php echo $form->label($model, 'first_name'); ?>
    <?php echo $form->textField($model, 'first_name'); ?>
    <?php echo $form->error($model, 'first_name'); ?>

    <?php echo $form->label($model, 'last_name'); ?>
    <?php echo $form->textField($model, 'last_name'); ?>
    <?php echo $form->error($model, 'last_name'); ?>

    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email'); ?>
    <?php echo $form->error($model, 'email'); ?>
</div>

<div class="row">
    <h3>Job Criteria</h3>
    <label for="cat_id">Category</label>
   <?php
   echo CHtml::dropDownList('JobEmployees[cat_id]', '', $categories, array(
       'prompt' => '-- All Categories --',
       'selected' => true,
       'ajax' => array(
           'type' => 'POST', //request type
           'url' => Yii::app()->createUrl('page/dynamicsubCategories'), //url to call
           'update' => '#JobEmployees_sub_cat_id',
           'data' => array('cat_id' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
       )
   ));


   ?>
</div>

<div class="row">
    <label for="sub_cat_id">Sub Categories</label>
    <?php
    echo CHtml::dropDownList('JobEmployees[sub_cat_id]', '', $location, array(
        'prompt' => '-- All Location --',
        'multiple' => 'multiple'
    ));

    ?>

</div>
<div class="row">
    <label for="location_id">Location</label>
    <?php
    echo CHtml::dropDownList('JobEmployees[location_id]', '', $location, array(
        'prompt' => '-- All Location --',
        'multiple' => 'multiple'
    ));
    ?>

    <label for="worktype_id">Work Type</label>
    <?php
    echo CHtml::dropDownList('JobEmployees[worktype_id]', '', $worktype, array(
        'prompt' => '-- All Work Types --',
        'multiple' => 'multiple'
    ));
    ?>
</div>
<div class="row buttons">
    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
<div class="clear"></div>

