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
	'action' => 'index.php?r=ms/applicationSettings'
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    
<div class="row">
	    <b>Application Status</b><br />
	<?php 
                echo CHtml::dropDownList('APPLICATION_STATUS[value6_int]', Ms::model()->findByAttributes(array('var_name'=>'APPLICATION_STATUS'))->value6_int, 
                array('1' => 'Active', '0' => 'Inactive', '2' => 'Expired'),array("onChange"=>"toggleStatusBox()"));
                ?>	   
</div>     

    
    
     
<div class="row" style="display:none;" id="app_status_msg">
	    <b>Status Message</b><br />
	    
<?php 



$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'APPLICATION_STATUS[value4_text]',
		    
                    'id'=>'Text1_text1_data',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'APPLICATION_STATUS'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     



    
<div class="row">
	    <b>Application Timezone</b><br />
	<?php 
                echo CHtml::dropDownList('APPLICATION_TIMEZONE[value1]', Ms::model()->findByAttributes(array('var_name'=>'APPLICATION_TIMEZONE'))->value1, 
                array('' => 'Default', 'Singapore' => 'Singapore', 'India'=>'India'));
                ?>	   
</div>      
    

    
<div class="row date">
<b>Application Start Date</b><br />
<?php 

$model =  Ms::model()->findByAttributes(array("var_name"=>"APPLICATION_START_DATE"));

Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$this->widget('CJuiDateTimePicker',array(
'model'=>$model, //Model object



'attribute'=>'value4_text', //attribute name
'mode'=>'datetime', //use "time","date" or "datetime" (default)
'options'=>array(), // jquery plugin options
'language' => '',

));


?>
</div>
	
    

    
    
    
    
    
    
<div class="row">
	    <b>Allow/Block Users</b><br />
	<?php 
                echo CHtml::dropDownList('ALLOW_BLOCK_USERS[value6_int]', Ms::model()->findByAttributes(array('var_name'=>'ALLOW_BLOCK_USERS'))->value6_int, 
                array('1' => 'Allow All Users', '2' => 'Allow Selected Users', '3' => 'Block Selected Users'),array("onChange"=>"toggleAllowBlockBox()"));
                ?>	   
</div>     

    
    
     
<div class="row" style="display:none;" id="allow_block_status_msg">

<b>Enter Facebook Id (?)</b> (comma separated)<br />
<textarea name="ALLOW_BLOCK_USERS[value5_text]" rows="4" cols="100" ><?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'ALLOW_BLOCK_USERS'))->value5_text); ?></textarea> 
	  <br />
	    
<b>Message for Blocked Users</b><br />
<?php 



$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'ALLOW_BLOCK_USERS[value4_text]',
		    
                    'id'=>'ALLOW_BLOCK_USERS_data',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'ALLOW_BLOCK_USERS'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     
    
    
    
    
    

    
    

<div class="row">
	    <b>Mobile Phones Status</b><br />
	<?php 
                echo CHtml::dropDownList('MOBILE_PHONES_STATUS[value6_int]', Ms::model()->findByAttributes(array('var_name'=>'MOBILE_PHONES_STATUS'))->value6_int, 
                array('1' => 'Default', '2' => 'Show Custom HTML'),array("onChange"=>"toggleMobilePhonesBox()"));
                ?>	   
</div>     

    
    
     
<div class="row" style="display:none;" id="mobile_phones_status_msg">
<b>Message for Mobile Phone Users</b><br />
<?php 



$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'MOBILE_PHONES_STATUS[value4_text]',
		    
                    'id'=>'MOBILE_PHONES_STATUS_data',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'MOBILE_PHONES_STATUS'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     
     
    
    
    
    


    
       <div class="row">
	    <b>Send Emails From (it should be a valid email address of the domain, e.g. contact@ogilvyapplications)</b><br />
	    <input name="emailFrom[value4_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'emailFrom'))->value4_text); ?>" >
	</div>
    
    
    <div class="row">
	    <b>Admin Emails (separate by comma for multiple email address)</b><br />
	    <input name="adminEmail[value4_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'adminEmail'))->value4_text); ?>" >
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