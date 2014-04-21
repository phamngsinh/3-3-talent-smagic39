<style>
    .helpBox{
	display:none;
    }
    fieldset{
	line-height:22px;
    }
    legend{
	font-size: 14px;
    }
    
    legend a{
	text-decoration: none;
    }
    </style>
    
    <?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ms-form',
	'enableAjaxValidation'=>false,
	'action' => 'index.php?r=ms/TwitterSharingMessages&name='.$_REQUEST['name'].'&twitter_msg_id='.$_REQUEST['twitter_msg_id']
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    

    <fieldset>
    <legend align="left"><b>Twitter Message (Global)</b> <a href="javascript:void(0);" onclick="$('#TWITTER_MESSAGE_GLOBAL_DIV').toggle('slow')" >(?)</a></legend>
    
    
    
 <input name="TWITTER_MESSAGE_GLOBAL<?php echo $_REQUEST['twitter_msg_id']; ?>[value4_text]" size="120" maxlength="140" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'TWITTER_MESSAGE_GLOBAL'.$_REQUEST['twitter_msg_id']))->value4_text); ?>" >
    
    <div id="TWITTER_MESSAGE_GLOBAL_DIV" class="helpBox" >	
	<b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]
<img src="images/TWITTER_MESSAGE_GLOBAL.jpg" style="padding:5px;" />
    </div>
    </fieldset>

    
     <fieldset>
    <legend align="left"><b>Twitter Message - Single Entry:</b> <a href="javascript:void(0);" onclick="$('#TWITTER_MESSAGE_SINGLE_ENTRY_DIV').toggle('slow')" >(?)</a></legend>
    
  
    <input name="TWITTER_MESSAGE_SINGLE_ENTRY<?php echo $_REQUEST['twitter_msg_id']; ?>[value4_text]" size="120" maxlength="140" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'TWITTER_MESSAGE_SINGLE_ENTRY'.$_REQUEST['twitter_msg_id']))->value4_text); ?>" >
    
    
     
    <div id="TWITTER_MESSAGE_SINGLE_ENTRY_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/TWITTER_MESSAGE_SINGLE_ENTRY.jpg" style="padding:5px;" />
    </div>
    </fieldset>
    
 
    

        
     
     

    
     



   
    
    
    
   



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



if($("#APPLICATION_STATUS_value6_int").val() == 1)
{
    $('#app_status_msg').slideUp();
}
else
{
    $('#app_status_msg').slideDown();
}

    
</script>