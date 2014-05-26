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
   <label for="JobCategory_ID">Job Category </label>
   <?php
        $tmp_cat_id = (isset($_GET['cat_id']) && $_GET['cat_id'] ) ? $_GET['cat_id'] : '';
        echo CHtml::dropDownList('cat_id', '', $categories, array(
            'prompt' => '-- All Categories --',
            'options' => array($tmp_cat_id => array('selected' => true)),
            'selected' => true,
            'ajax' => array(
                'beforeSend' => 'preAjax',
                'complete' => 'completeAjax',
                'type' => 'POST', //request type
                'url' => Yii::app()->createUrl('page/dynamicsubCategories'), //url to call
                'update' => '#sub_cat_id',
                'data' => array('cat_id' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
            )
        ));
        ?>
    
</div><br/>
<div class="row">
  <label for="JobSubcategory_ID">Job Sub Category </label>
   <?php
        if (isset($_GET['sub_cat_id']) && $_GET['sub_cat_id']) {

            $tmp_cat_id = $_GET['sub_cat_id'];
            echo CHtml::dropDownList('sub_cat_id', '', $sub_categories, array(
                'options' => array($tmp_cat_id => array('selected' => true)),
            ));
        } else {
            echo CHtml::dropDownList('sub_cat_id', '', array(
                '' => '-- All Sub Categories --',
            ));
        }
        ?>
   
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
<script>

    function preAjax() {
        $('#sub_cat_id').html('<span class="loading">Loading...</span>');
    }
    function completeAjax() {
        $('#sub_cat_id').siblings('.loading').remove();
    }

    
</script>


