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
	'action' => 'index.php?r=ms/updatesingle'
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    
    
    
    
    <div class="row date">
		<b>Contest Start Date</b><br />
		<?php 
		
		$model =  MS::model()->findByAttributes(array("var_name"=>"CONTEST_START_DATE"));
		
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
	    <b>New Landing Page Status</b><br />
	<?php 
                echo CHtml::dropDownList('new_landing_page_status', Ms::model()->findByAttributes(array('var_name'=>'new_landing_page_status'))->value6_int, 
                array('1' => 'Active', '0' => 'Inactive'));
                ?>	   
	</div> 
    
    
    
	<div class="row">
	    <b>Users allowed year range</b><br />
	    From <input name="year_from" size="10" value="<?php echo Ms::model()->findByAttributes(array('var_name'=>'year_from'))->value4_text; ?>" > : To <input size="10" name="year_to" value="<?php echo Ms::model()->findByAttributes(array('var_name'=>'year_to'))->value4_text; ?>" >
	</div>
    
    
	
	
		<div class="row">
	    <b>Number of Posts allowed per user</b><br />
	    <input name="videos_per_user" value="<?php echo Ms::model()->findByAttributes(array('var_name'=>'videos_per_user'))->value6_int; ?>" >
	</div>
	
    
    
    
    	<div class="row">
	    <b>Post's default status</b><br />
	<?php 
                echo CHtml::dropDownList('videos_default_status', Ms::model()->findByAttributes(array('var_name'=>'videos_default_status'))->value6_int, 
                array('1' => 'Active', '0' => 'Inactive'));
                ?>	   
	</div> 
    
    
    
    
    
	<div class="row">
	    <b>Total Number of Votes allowed per user on a post</b><br />
	    <input name="votes_per_user" value="<?php echo Ms::model()->findByAttributes(array('var_name'=>'votes_per_user'))->value6_int; ?>" >
	</div>
    

    
    
    
	<div class="row">
	    <b>Allow voting after every (in seconds)</b><br />
	    <input name="votes_after_every" value="<?php echo Ms::model()->findByAttributes(array('var_name'=>'votes_after_every'))->value6_int; ?>" >
	</div>
    
    <br />
    
	<div class="row">
	    <b>Facebook Profile Tab Url</b><br />
	    <input name="tab_url" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'tab_url'))->value4_text); ?>" >
	</div>
    
       <div class="row">
	    <b>Send Email From (it should be a valid email address of the domain, e.g. contact@ogilvyapplications)</b><br />
	    <input name="emailFrom" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'emailFrom'))->value4_text); ?>" >
	</div>
    
    
    <div class="row">
	    <b>Contact Emails Receivers (separate by comma for multiple email address)</b><br />
	    <input name="adminEmail" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'adminEmail'))->value4_text); ?>" >
	</div>
    
    <br />

    
   <fieldset>
    <legend align="left"><b>Sharing Messages:</b></legend>
    
    
    <b>Common Messages :</b> <a href="javascript:void(0);" onclick="$('#COMMON_MSGS_DIV').toggle('slow')" >(help)</a> <br />
    Application Title [APP_TITLE] : <br />
    <input name="APP_TITLE" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'APP_TITLE'))->value4_text); ?>" >
    <br />
     Application Details [APP_DETAILS] : <br />
    <input name="APP_DETAILS" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'APP_DETAILS'))->value4_text); ?>" >
        <div id="COMMON_MSGS_DIV" class="helpBox" >			
<img src="images/COMMON_MSGS.jpg" style="padding:5px;" />
    </div>
    
    
     <br /><br />
    
    
    <b>Manual Popup Box Message (Global):</b> <a href="javascript:void(0);" onclick="$('#MANUAL_POPUP_BOX_MSG_GLOBAL_DIV').toggle('slow')" >(help)</a> <br />
    
    Title:<br />
    <input name="MANUAL_POPUP_BOX_TITLE_GLOBAL" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'MANUAL_POPUP_BOX_TITLE_GLOBAL'))->value4_text); ?>" >
    
    <br />
    Details:<br />
    <input name="MANUAL_POPUP_BOX_DETAILS_GLOBAL" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'MANUAL_POPUP_BOX_DETAILS_GLOBAL'))->value4_text); ?>" >
    
    
    
    <div id="MANUAL_POPUP_BOX_MSG_GLOBAL_DIV" class="helpBox" >
	<b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]
	
	<img src="images/MANUAL_POPUP_BOX_GLOBAL.jpg" style="padding:5px;" />
    </div>
    
     <br /><br />
    
     
     
     
 <b>Invite Friends Message (Global):</b> <a href="javascript:void(0);" onclick="$('#INVITE_FRIEND_MSG_GLOBAL_DIV').toggle('slow')" >(help)</a> <br />
    
 Title:<br />
 <input name="INVITE_FRIEND_TITLE_GLOBAL" size="80" MAXLENGTH ="200" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'INVITE_FRIEND_TITLE_GLOBAL'))->value4_text); ?>" ><br />
 Details:<br />
 <input name="INVITE_FRIEND_DETAILS_GLOBAL" size="80" MAXLENGTH ="200" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'INVITE_FRIEND_DETAILS_GLOBAL'))->value4_text); ?>" >
    
    <div id="INVITE_FRIEND_MSG_GLOBAL_DIV" class="helpBox" >	
	<b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]
<img src="images/INVITE_FRIEND_MSG_GLOBAL.jpeg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
<b>Invite Friends Message (Single Entry):</b> <a href="javascript:void(0);" onclick="$('#INVITE_FRIEND_SINGLE_ENTRY_DIV').toggle('slow')" >(help)</a> <br />
 
    Title:<br />
    <input name="INVITE_FRIEND_TITLE_SINGLE_ENTRY" size="80" value="<?php echo @CHTML::decode(Ms::model()->findByAttributes(array('var_name'=>'INVITE_FRIEND_TITLE_SINGLE_ENTRY'))->value4_text); ?>" >
    <br />
    Details:<br />
    <input name="INVITE_FRIEND_DETAILS_SINGLE_ENTRY" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'INVITE_FRIEND_DETAILS_SINGLE_ENTRY'))->value4_text); ?>" >
    
    
     
    <div id="INVITE_FRIEND_SINGLE_ENTRY_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/INVITE_FRIEND_MSG_GLOBAL.jpeg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
     
     
     
 <b>Sharing Message - Single Entry:</b> <a href="javascript:void(0);" onclick="$('#SHARING_MSG_SINGLE_ENTRY_DIV').toggle('slow')" >(help)</a> <br />
 
    Title:<br />
    <input name="SHARING_TITLE_SINGLE_ENTRY" size="80" value="<?php echo @CHTML::decode(Ms::model()->findByAttributes(array('var_name'=>'SHARING_TITLE_SINGLE_ENTRY'))->value4_text); ?>" >
    <br />
    Details:<br />
    <input name="SHARING_DETAILS_SINGLE_ENTRY" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'SHARING_DETAILS_SINGLE_ENTRY'))->value4_text); ?>" >
    
    
     
    <div id="SHARING_MSG_SINGLE_ENTRY_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/SHARING_MSG_SINGLE_ENTRY.jpeg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
     
 <b>Auto Message on Entry Submission:</b> <a href="javascript:void(0);" onclick="$('#AUTO_MSG_ON_ENTRY_SUBMISSION_DIV').toggle('slow')" >(help)</a> <br />
 
    Entry Title:<br />
    <input name="AUTO_MSG_TITLE_ON_ENTRY_SUBMISSION" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_TITLE_ON_ENTRY_SUBMISSION'))->value4_text); ?>" >
    <br />
    Entry Details:<br />
    <input name="AUTO_MSG_DETAILS_ON_ENTRY_SUBMISSION" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_DETAILS_ON_ENTRY_SUBMISSION'))->value4_text); ?>" >
    <br />
    APP Details:<br />
    <input name="AUTO_MSG_APP_DETAILS_ON_ENTRY_SUBMISSION" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_APP_DETAILS_ON_ENTRY_SUBMISSION'))->value4_text); ?>" >
    
    
     
    <div id="AUTO_MSG_ON_ENTRY_SUBMISSION_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/AUTO_MSG_ON_ENTRY_SUBMISSION.jpg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
     
     
 <b>Auto Message on Voting:</b> <a href="javascript:void(0);" onclick="$('#AUTO_MSG_ON_VOTING_DIV').toggle('slow')" >(help)</a> <br />
 
    Entry Title:<br />
    <input name="AUTO_MSG_TITLE_ON_VOTING" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_TITLE_ON_VOTING'))->value4_text); ?>" >
    <br />
    Entry Details:<br />
    <input name="AUTO_MSG_DETAILS_ON_VOTING" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_DETAILS_ON_VOTING'))->value4_text); ?>" >
    <br />
    APP Details:<br />
    <input name="AUTO_MSG_APP_DETAILS_ON_VOTING" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'AUTO_MSG_APP_DETAILS_ON_VOTING'))->value4_text); ?>" >
    
    
     
    <div id="AUTO_MSG_ON_VOTING_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/AUTO_MSG_ON_ENTRY_SUBMISSION.jpg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
      <b>Twitter Message (Global):</b> <a href="javascript:void(0);" onclick="$('#TWITTER_MESSAGE_GLOBAL_DIV').toggle('slow')" >(help)</a> <br />
    
 
 Details:<br />
 <input name="TWITTER_MESSAGE_GLOBAL" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'TWITTER_MESSAGE_GLOBAL'))->value4_text); ?>" >
    
    <div id="TWITTER_MESSAGE_GLOBAL_DIV" class="helpBox" >	
	<b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]
<img src="images/TWITTER_MESSAGE_GLOBAL.jpg" style="padding:5px;" />
    </div>
     <br /><br />   
     
<b>Twitter Message - Single Entry:</b> <a href="javascript:void(0);" onclick="$('#TWITTER_MESSAGE_SINGLE_ENTRY_DIV').toggle('slow')" >(help)</a> <br />
 
    Details:<br />
    <input name="TWITTER_MESSAGE_SINGLE_ENTRY" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'TWITTER_MESSAGE_SINGLE_ENTRY'))->value4_text); ?>" >
    
    
     
    <div id="TWITTER_MESSAGE_SINGLE_ENTRY_DIV" class="helpBox" >
	<b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	<br />
	
	
	<br /><img src="images/TWITTER_MESSAGE_SINGLE_ENTRY.jpg" style="padding:5px;" />
    </div>
     <br /><br />    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
       
     <a href="javascript:;" onclick="conf('index.php?r=ms/updatesingle&refreshMessages=1','Are you sure to refresh all sharing messages?')" >(reset all sharing messages)</a>
     
     
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

</script>