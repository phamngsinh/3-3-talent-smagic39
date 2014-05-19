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
<div class="job-list">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'registration-alert-form',
        'enableClientValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'clientOptions' => array(
            'validateOnSubmit' => false,
        ),
    ));
    ?>

    <div class="row">
        <h3>Your Details</h3>
        <?php echo $form->label($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name'); ?>
        <div style="clear:both"></div><?php echo $form->error($model, 'first_name'); ?>
       
        <?php echo $form->label($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name'); ?>
         <div style="clear:both"></div><?php echo $form->error($model, 'last_name'); ?>
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <div style="clear:both"></div><?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <h3>Job Criteria</h3>
        <label for="cat_id">Category</label>
        <?php
        echo CHtml::dropDownList('JobAlerts[cat_id]', '', $categories, array(
            'prompt' => '-- All Categories --',
            'selected' => true,
            'ajax' => array(
                'type' => 'POST', //request type
                'url' => Yii::app()->createUrl('page/dynamicsubCategories'), //url to call
                'update' => '#JobAlerts_sub_cat_id',
                'data' => array('cat_id' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
            )
        ));
        ?>
    </div>

    <div class="row">
        <label for="sub_cat_id">Sub Categories</label>
<?php
echo CHtml::dropDownList('JobAlerts[sub_cat_id]', '', array(), array(
    'prompt' => '-- All Sub Categories --',
    'multiple' => 'multiple'
));
?>

    </div>
    <div class="row">
        <label for="location_id">Location</label>
<?php
echo CHtml::dropDownList('JobAlerts[location_id]', '', $location, array(
    'prompt' => '-- All Location --',
    'multiple' => 'multiple'
));
?>

        <label for="worktype_id">Work Type</label>
        <?php
        echo CHtml::dropDownList('JobAlerts[worktype_id]', '', $worktype, array(
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
</div>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/additional-methods.min.js"></script>
<script>
    jQuery(function($) {
        $("#registration-alert-form").validate({
            rules: {
                'JobEmployees[first_name]': {
                    required: true
                },
                'JobEmployees[last_name]': {
                    required: true
                },
                'JobEmployees[email]': {
                    required: true,
                    email: true,
                },
            
            },
            messages: {
                'JobEmployees[first_name]': 'First name cannot be blank.',
                'JobEmployees[last_name]': 'Last name cannot be blank.',
                'JobEmployees[email]': {
                    required: 'Email address cannot be blank.',
                    email: 'Email address is not a valid email address.'
                },
            }
        });
    });
</script>
<?php
$this->renderPartial('_search_right', array(), FALSE, TRUE);
?>

