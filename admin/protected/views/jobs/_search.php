<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
        <?php
        echo $form->dropDownList($model, 'cat_id', CHtml::listData(JobCategories::model()->findAll(), 'cat_id', 'cat_name'), array(
            'prompt' => '-- select categories --',
            'selected' => true,
        ));
        ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'base_salary'); ?>
		<?php echo $form->textField($model,'base_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'benefits'); ?>
		<?php echo $form->textField($model,'benefits',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_posted'); ?>
		<?php echo $form->textField($model,'date_posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'education_requirements'); ?>
		<?php echo $form->textField($model,'education_requirements',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'experience_requirements'); ?>
		<?php echo $form->textField($model,'experience_requirements',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incentives'); ?>
		<?php echo $form->textField($model,'incentives',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_location_id'); ?>
        <?php
        echo $form->dropDownList($model, 'job_location_id', CHtml::listData(JobLocation::model()->findAll(), 'job_location_id', 'address'), array(
            'prompt' => '-- select location --',
            'selected' => true,
        ));
        ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsibilities'); ?>
		<?php echo $form->textField($model,'responsibilities',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'special_commitments'); ?>
		<?php echo $form->textField($model,'special_commitments',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/jquery-ui.css');
$cs->registerScriptFile($baseUrl . '/js/jquery-ui.min.js');
?>
<script>

    jQuery(function($){
        $('#Jobs_date_posted').datepicker({ dateFormat: 'yy-mm-dd' });
    });

</script>