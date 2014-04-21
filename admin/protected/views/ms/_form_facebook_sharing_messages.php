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
<?php
$fb_msg_id = $_REQUEST['fb_msg_id'];
?>
<div class="form">

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'ms-form',
    'enableAjaxValidation' => false,
    'action' => 'index.php?r=ms/FacebookSharingMessages&name=' . $_REQUEST['name'] . '&fb_msg_id=' . $fb_msg_id
	));
?>
    <style> .row{padding-top: 10px;} </style>

<?php

//value6_int becomes 1 when when it is really accessed by the app.

?>

<?php

    $FB_MANUAL_POPUP_BOX_GLOBAL = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_MANUAL_POPUP_BOX_GLOBAL' . $fb_msg_id))->id;
    if (isset($FB_MANUAL_POPUP_BOX_GLOBAL))
    {
	?>
        <fieldset>
    	<legend align="left"><b>Manual Popup Box Message (Global)</b> <a href="javascript:void(0);" onclick="$('#MANUAL_POPUP_BOX_MSG_GLOBAL_DIV').toggle('slow')" >(?)</a></legend>


    	Title<br />
    	<input name="FB_MANUAL_POPUP_BOX_GLOBAL<?php echo $fb_msg_id; ?>[value4_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_MANUAL_POPUP_BOX_GLOBAL' . $fb_msg_id))->value4_text); ?>" >

    	<br />
    	Details<br />
    	<input name="FB_MANUAL_POPUP_BOX_GLOBAL<?php echo $fb_msg_id; ?>[value5_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_MANUAL_POPUP_BOX_GLOBAL' . $fb_msg_id))->value5_text); ?>" >

    	<div id="MANUAL_POPUP_BOX_MSG_GLOBAL_DIV" class="helpBox" >
    	    <b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]<br />	
    	    <img src="images/MANUAL_POPUP_BOX_GLOBAL.jpg" style="padding:5px;" />
    	</div>
        </fieldset>
<?php } ?>


<?php
    $FB_INVITE_FRIENDS_GLOBAL = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_INVITE_FRIENDS_GLOBAL' . $fb_msg_id))->id;
    if (isset($FB_INVITE_FRIENDS_GLOBAL))
    {
	?>    
    <fieldset>
	<legend align="left"><b>Invite Friends Message (Global)</b> <a href="javascript:void(0);" onclick="$('#INVITE_FRIEND_MSG_GLOBAL_DIV').toggle('slow')" >(?)</a></legend>

	Title<br />
	<input name="FB_INVITE_FRIENDS_GLOBAL<?php echo $fb_msg_id; ?>[value4_text]" size="80" MAXLENGTH ="48" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_INVITE_FRIENDS_GLOBAL' . $fb_msg_id))->value4_text); ?>" ><br />
	Details<br />
	<input name="FB_INVITE_FRIENDS_GLOBAL<?php echo $fb_msg_id; ?>[value5_text]" size="80" MAXLENGTH ="248" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_INVITE_FRIENDS_GLOBAL' . $fb_msg_id))->value5_text); ?>" >

	<div id="INVITE_FRIEND_MSG_GLOBAL_DIV" class="helpBox" >
	    <b>Allowed Tags:</b> <br />[USER], [APP_TITLE], [APP_DETAILS]<br />	
	    <img src="images/INVITE_FRIEND_MSG_GLOBAL.jpeg" style="padding:5px;" />
	</div>
    </fieldset>
<?php } ?>




    
    
<?php

    $FB_INVITE_FRIENDS_SINGLE_ENTRY = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_INVITE_FRIENDS_SINGLE_ENTRY' . $fb_msg_id))->id;
    if (isset($FB_INVITE_FRIENDS_SINGLE_ENTRY))
    {
	?>     
    <fieldset>
	<legend align="left"><b>Invite Friends Message (Single Entry)</b> <a href="javascript:void(0);" onclick="$('#INVITE_FRIEND_SINGLE_ENTRY_DIV').toggle('slow')" >(?)</a></legend>

	Title<br />
	<input name="FB_INVITE_FRIENDS_SINGLE_ENTRY<?php echo $fb_msg_id; ?>[value4_text]" size="80" value="<?php echo @CHTML::decode(Ms::model()->findByAttributes(array('var_name' => 'FB_INVITE_FRIENDS_SINGLE_ENTRY' . $fb_msg_id))->value4_text); ?>" >
	<br />
	Details<br />
	<input name="FB_INVITE_FRIENDS_SINGLE_ENTRY<?php echo $fb_msg_id; ?>[value5_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_INVITE_FRIENDS_SINGLE_ENTRY' . $fb_msg_id))->value5_text); ?>" >



	<div id="INVITE_FRIEND_SINGLE_ENTRY_DIV" class="helpBox" >
	    <b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]			
	    <br /><img src="images/INVITE_FRIEND_MSG_GLOBAL.jpeg" style="padding:5px;" />
	</div>



    </fieldset>
<?php } ?>




<?php

    $FB_SHARING_SINGLE_ENTRY = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_SHARING_SINGLE_ENTRY' . $fb_msg_id))->id;
    if (isset($FB_SHARING_SINGLE_ENTRY))
    {
	?> 
    <fieldset>
	<legend align="left"><b>Sharing Message - Single Entry</b> <a href="javascript:void(0);" onclick="$('#SHARING_MSG_SINGLE_ENTRY_DIV').toggle('slow')" >(?)</a></legend>

	Title<br />
	<input name="FB_SHARING_SINGLE_ENTRY<?php echo $fb_msg_id; ?>[value4_text]" size="80" value="<?php echo @CHTML::decode(Ms::model()->findByAttributes(array('var_name' => 'FB_SHARING_SINGLE_ENTRY' . $fb_msg_id))->value4_text); ?>" >
	<br />
	Details<br />
	<input name="FB_SHARING_SINGLE_ENTRY<?php echo $fb_msg_id; ?>[value5_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_SHARING_SINGLE_ENTRY' . $fb_msg_id))->value5_text); ?>" >



	<div id="SHARING_MSG_SINGLE_ENTRY_DIV" class="helpBox" >
	    <b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]	
	    <br /><img src="images/SHARING_MSG_SINGLE_ENTRY.jpeg" style="padding:5px;" />
	</div>

    </fieldset>
<?php } ?>
    
    



<?php

    $FB_AUTO_MSG_ON_ENTRY_SUBMISSION = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . $fb_msg_id))->id;
    if (isset($FB_AUTO_MSG_ON_ENTRY_SUBMISSION))
    {
	?>     
    <fieldset>
	<legend align="left"><b>Auto Message on Entry Submission</b> <a href="javascript:void(0);" onclick="$('#AUTO_MSG_ON_ENTRY_SUBMISSION_DIV').toggle('slow')" >(?)</a></legend>

	Entry Title<br />
	<input name="FB_AUTO_MSG_ON_ENTRY_SUBMISSION<?php echo $fb_msg_id; ?>[value1]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . $fb_msg_id))->value1); ?>" >
	<br />
	Entry Details<br />
	<input name="FB_AUTO_MSG_ON_ENTRY_SUBMISSION<?php echo $fb_msg_id; ?>[value4_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . $fb_msg_id))->value4_text); ?>" >
	<br />
	APP Details<br />
	<input name="FB_AUTO_MSG_ON_ENTRY_SUBMISSION<?php echo $fb_msg_id; ?>[value5_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . $fb_msg_id))->value5_text); ?>" >



	<div id="AUTO_MSG_ON_ENTRY_SUBMISSION_DIV" class="helpBox" >
	    <b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	    <br />


	    <br /><img src="images/AUTO_MSG_ON_ENTRY_SUBMISSION.jpg" style="padding:5px;" />
	</div>

    </fieldset>
<?php } ?>
    
    


<?php

    $FB_AUTO_MSG_ON_VOTING = @Ms::model()->findByAttributes(array('value6_int' => 1, 'var_name' => 'FB_AUTO_MSG_ON_VOTING' . $fb_msg_id))->id;
    if (isset($FB_AUTO_MSG_ON_VOTING))
    {
	?> 
    <fieldset>
	<legend align="left"><b>Auto Message on Voting</b> <a href="javascript:void(0);" onclick="$('#AUTO_MSG_ON_VOTING_DIV').toggle('slow')" >(?)</a></legend>



	Entry Title<br />
	<input name="FB_AUTO_MSG_ON_VOTING<?php echo $fb_msg_id; ?>[value1]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_VOTING' . $fb_msg_id))->value1); ?>" >
	<br />
	Entry Details<br />
	<input name="FB_AUTO_MSG_ON_VOTING<?php echo $fb_msg_id; ?>[value4_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_VOTING' . $fb_msg_id))->value4_text); ?>" >
	<br />
	APP Details<br />
	<input name="FB_AUTO_MSG_ON_VOTING<?php echo $fb_msg_id; ?>[value5_text]" size="80" value="<?php echo @CHtml::encode(Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_VOTING' . $fb_msg_id))->value5_text); ?>" >



	<div id="AUTO_MSG_ON_VOTING_DIV" class="helpBox" >
	    <b>Allowed Tags :</b> <br />[USER], [SUBMITTER], [ENTRY_TITLE], [ENTRY_DETAILS], [APP_TITLE], [APP_DETAILS]
	    <br />


	    <br /><img src="images/AUTO_MSG_ON_ENTRY_SUBMISSION.jpg" style="padding:5px;" />
	</div>

    </fieldset>
<?php } ?>
















    <br /><br /> 

    <a href="javascript:;" onclick="conf('index.php?r=ms/FacebookSharingMessages&name=<?php echo $_REQUEST['name']; ?>&fb_msg_id=<?php echo $fb_msg_id; ?>&refreshFBMessages=1','Are you sure to refresh all sharing messages?')" >(reset all sharing messages)</a> <a href="javascript:void(0);" onclick="$('#REFRESH_DIV').toggle('slow')" >(?)</a>
    <div id="REFRESH_DIV" class="helpBox" >
	<br />
	It will delete all sharing messages and will come automatically when sharing messages are actually called from the facebook app.
    </div>
    
    
    <br /><br />













    <div class="row buttons">
<?php echo CHtml::submitButton('  Update  ', array('class' => 'button grey small_btn')); ?>
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