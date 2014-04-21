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

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ms-form',
	'enableAjaxValidation'=>false,
	'action' => '#',
	'htmlOptions'=>array("onsubmit"=>"return addToTab()")
)); ?>
    <style> .row{padding-top: 10px;} </style>


    

    
    
    
    
    



    
       <div class="row">
	    <b>Facebook Application ID/API Key (?)</b><br />
	    <input name="app_id" id="app_id" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value4_text); ?>" >
	</div>
    
	<div class="row">
	    <b>Facebook Application Namespace (?)</b><br />
	    <input name="app_namespace" id="app_namespace" size="80" value="https://apps.facebook.com/<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value1); ?>/" >
	</div>
   



	<div class="row buttons">
		<?php echo CHtml::submitButton('  Add Now  ', array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>

function addToTab()
{
    window.open("https://www.facebook.com/dialog/pagetab?app_id="+$("#app_id").val()+"&next="+$("#app_namespace").val());
}



</script>