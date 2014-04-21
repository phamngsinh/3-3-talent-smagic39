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
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    
<div class="row">
	    <b>Entries Default Status</b><br />
	<?php 
                echo CHtml::dropDownList('ENTRIES_SETTINGS_ENTRIES_DEFAULT_STATUS[value6_int]', Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_DEFAULT_STATUS'))->value6_int, 
                array('1' => 'Active', '0' => 'Inactive'));
                ?>	   
</div>     

    <br />
<div class="row">
	    <b>Number of entries allowed per user</b><br />
	<input name="ENTRIES_SETTINGS_ENTRIES_PER_USER[value6_int]" size="20" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_PER_USER'))->value6_int); ?>" >
	<a href="javascript:void(0)" onclick="$('#ENTRIES_SETTINGS_ENTRIES_PER_USER_DIV').slideToggle();" >(customize message)</a>
	
	<div id="ENTRIES_SETTINGS_ENTRIES_PER_USER_DIV" style="display:none">
	    
	    On Success :<br />
	    <input name="ENTRIES_SETTINGS_ENTRIES_PER_USER[value5_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_PER_USER'))->value5_text); ?>" >
	    <br />
	    On Error :<br />
	    <input name="ENTRIES_SETTINGS_ENTRIES_PER_USER[value4_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_PER_USER'))->value4_text); ?>" >
	    <br /><b>allowed tags :</b> [VALUE]
	</div>
	<br />
</div>   
    
    <br />
   
    
<div class="row">
	     <b>Allow entry after every (in seconds)</b><br />
	<input name="ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY[value6_int]" size="20" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY'))->value6_int); ?>" >
	<a href="javascript:void(0)" onclick="$('#ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY_DIV').slideToggle();" >(customize message)</a>
	
	<div id="ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY_DIV" style="display:none">
	    
	    On Error :<br />
	    <input name="ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY[value4_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_ENTRIES_ALLOW_AFTER_EVERY'))->value4_text); ?>" >
	    <br /><b>allowed tags :</b> [VALUE]
	</div>
	<br />
</div>    
    
    <br />


<div class="row">
	    <b>Total Number of Votes allowed per user on an entry</b><br />
	<input name="ENTRIES_SETTINGS_VOTES_PER_USER[value6_int]" size="20" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_VOTES_PER_USER'))->value6_int); ?>" >
	<a href="javascript:void(0)" onclick="$('#ENTRIES_SETTINGS_VOTES_PER_USER_DIV').slideToggle();" >(customize message)</a>
	
	<div id="ENTRIES_SETTINGS_VOTES_PER_USER_DIV" style="display:none">
	    
	    On Success : <br />
	    <input name="ENTRIES_SETTINGS_VOTES_PER_USER[value5_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_VOTES_PER_USER'))->value5_text); ?>" >
	    <br />
	    
	    On Error :<br />
	    <input name="ENTRIES_SETTINGS_VOTES_PER_USER[value4_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_VOTES_PER_USER'))->value4_text); ?>" >
	    <br /><b>allowed tags :</b> [VALUE]
	</div>
	<br />
</div>     
    
    <br />
    
    
   
<div class="row">
	     <b>Allow voting after every (in seconds)</b><br />
	<input name="ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY[value6_int]" size="20" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY'))->value6_int); ?>" >
	<a href="javascript:void(0)" onclick="$('#ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY_DIV').slideToggle();" >(customize message)</a>
	
	<div id="ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY_DIV" style="display:none">
	    On Error :<br />
	    <input name="ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY[value4_text]" size="100" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ENTRIES_SETTINGS_VOTES_ALLOW_AFTER_EVERY'))->value4_text); ?>" >
	    <br /><b>allowed tags :</b> [VALUE]
	</div>
	<br />
</div>    
    
    
    
    
    
    


	<div class="row buttons">
		<?php echo CHtml::submitButton('Update',  array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>

function conf(url, msg)
{
    var cf = confirm(msg);
    
    if(cf)
	{
	    document.location = url;
	}
}


function toggleStatusBox()
{
    if($("#APPLICATION_STATUS_value6_int").val() == 1)
    {
	$('#app_status_msg').slideUp();
    }
    else
    {
	$('#app_status_msg').slideDown();
    }
}


function toggleAllowBlockBox()
{
    if($("#ALLOW_BLOCK_USERS_value6_int").val() == 1)
    {
	$('#allow_block_status_msg').slideUp();
    }
    else
    {
	$('#allow_block_status_msg').slideDown();
    }
}


function toggleMobilePhonesBox()
{
    if($("#MOBILE_PHONES_STATUS_value6_int").val() == 1)
    {
	$('#mobile_phones_status_msg').slideUp();
    }
    else
    {
	$('#mobile_phones_status_msg').slideDown();
    }
}



if($("#APPLICATION_STATUS_value6_int").val() == 1)
{
    $('#app_status_msg').slideUp();
}
else
{
    $('#app_status_msg').slideDown();
}


if($("#ALLOW_BLOCK_USERS_value6_int").val() == 1)
{
    $('#allow_block_status_msg').slideUp();
}
else
{
    $('#allow_block_status_msg').slideDown();
}


if($("#MOBILE_PHONES_STATUS_value6_int").val() == 1)
{
    $('#mobile_phones_status_msg').slideUp();
}
else
{
    $('#mobile_phones_status_msg').slideDown();
}



</script>