<?php


/**
 * Updated On : 7th Nov. 2012
 * 
 * 
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 * 
 * return data are slashed to avoid argument error in js, if you want to use it in native php then strip slashes.
 * 
 * Implemented multiple sharing system so that it can be used for multiple group on the same app (used fb_msg_id to distinct msg in ms table)
 * 
 * the method with //done comment is done otherwise pending
 */


class SharingMessages extends CController
{
    var $fb_msg_id;
    var $appTitle;
    var $appDetails;
    
    
    function __construct($fb_msg_id=0){ 
        $this->fb_msg_id = $fb_msg_id;
	
	$this->appTitle = @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'APP_DETAILS'))->value4_text);
	$this->appDetails = @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'APP_DETAILS'))->value5_text);
    }
    
    public function getDetails()
    {
	return array(
	    'fb_msg_id'=>  $this->fb_msg_id,
	    'appTitle'=>  $this->appTitle,
	    'appDetails'=>  $this->appDetails
	);
    }
   

    /* sharing msgs template parsing here */

    //done
    public function FB_MANUAL_POPUP_BOX_GLOBAL($user='')
    {
	
	$model = Ms::model()->findByAttributes(array('var_name' => 'FB_MANUAL_POPUP_BOX_GLOBAL' . $this->fb_msg_id));
	
	$model->value6_int = 1; //add 1 if it is actually used.
	$model->save(); 
	
	
	$data['TITLE'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]"), array($this->appTitle, $this->appDetails, $user), @CHtml::decode($model->value4_text)));
	$data['DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]"), array($this->appTitle, $this->appDetails, $user), @CHtml::decode($model->value5_text)));
	

	return $data;
    }
    
    //done
    public function FB_INVITE_FRIEND_GLOBAL($user='')
    {
	
	$model = Ms::model()->findByAttributes(array('var_name' => 'FB_INVITE_FRIENDS_GLOBAL' . $this->fb_msg_id));
	
	$model->value6_int = 1; //add 1 if it is actually used.
	$model->save(); 
	
	$data['TITLE'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]"), array($this->appTitle, $this->appDetails, $user), @CHtml::decode($model->value4_text)));
	$data['DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]"), array($this->appTitle, $this->appDetails, $user), @CHtml::decode($model->value5_text)));
	
	return $data;		
    }
    

    public  function INVITE_FRIEND_SINGLE_ENTRY($user, $submitter, $entry_title, $entry_details)
    {
	/**
	 * usage:
	 * $sharingSingleEntry = FacebookMessages::SHARING_SINGLE_ENTRY($this->nowUserName,$data->user->name,$data->title,$data->details);
	 */
	$this->appTitle = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_TITLE'))->value4_text);
	$this->appDetails = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_Details'))->value4_text);

	$title = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'INVITE_FRIEND_TITLE_SINGLE_ENTRY'))->value4_text);
	$details = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'INVITE_FRIEND_DETAILS_SINGLE_ENTRY'))->value4_text);


	$title = str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), $title);
	$details = str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), $details);


	$data['TITLE'] = addslashes($title);
	$data['DETAILS'] = addslashes($details);


	return $data;
    }

    
    
    //done
    public  function FB_SHARING_SINGLE_ENTRY($user, $submitter, $entry_title, $entry_details)
    {
	
	$model = Ms::model()->findByAttributes(array('var_name' => 'FB_SHARING_SINGLE_ENTRY' . $this->fb_msg_id));
	
	$model->value6_int = 1; //add 1 if it is actually used.
	$model->save(); 
	
	$data['TITLE'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value4_text)));
	$data['DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value5_text)));
	
	return $data;
		
    }

    //done
    public  function FB_AUTO_MSG_ON_ENTRY_SUBMISSION($user, $submitter, $entry_title, $entry_details)
    {
		
	
	$model = Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_ENTRY_SUBMISSION' . $this->fb_msg_id));
	
	$model->value6_int = 1; //add 1 if it is actually used.
	$model->save(); 
	
	
	$data['TITLE'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value1)));
	$data['DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value4_text)));
	$data['APP_DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value5_text)));

	
	
	return $data;
    }

    //done
    public function FB_AUTO_MSG_ON_VOTING($user, $submitter, $entry_title, $entry_details)
    {
	
	$model = Ms::model()->findByAttributes(array('var_name' => 'FB_AUTO_MSG_ON_VOTING' . $this->fb_msg_id));
	
	$model->value6_int = 1; //add 1 if it is actually used.
	$model->save(); 
	
	
	$data['TITLE'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value1)));
	$data['DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value4_text)));
	$data['APP_DETAILS'] = addslashes(str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), CHtml::decode($model->value5_text)));
		
	return $data;
	
    }

    
    
    
    
    public  function TWITTER_MESSAGE_GLOBAL($user='')
    {

	/**
	 * usage:
	 * $twitterSharingMsgGlobal = FacebookMessages::TWITTER_MESSAGE_GLOBAL($this->nowUserName); 
	 */
	$this->appTitle = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_TITLE'))->value4_text);
	$this->appDetails = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_Details'))->value4_text);

	
	$details = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'TWITTER_MESSAGE_GLOBAL'))->value4_text);
	
	
	
	$details = str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]"), array($this->appTitle, $this->appDetails, $user), $details);
	
	
	$data['DETAILS'] = addslashes($details);

	return $data;
    }


    public  function TWITTER_MESSAGE_SINGLE_ENTRY($user, $submitter, $entry_title, $entry_details)
    {
	/**
	 * usage:
	 * $sharingSingleEntry = FacebookMessages::TWITTER_MESSAGE_SINGLE_ENTRY($this->nowUserName,$data->user->name,$data->title,$data->details);
	 */
	$this->appTitle = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_TITLE'))->value4_text);
	$this->appDetails = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'APP_Details'))->value4_text);
	
	$details = CHtml::decode(MS::model()->findByAttributes(array("var_name" => 'TWITTER_MESSAGE_SINGLE_ENTRY'))->value4_text);
	
	$details = str_replace(array("[APP_TITLE]", "[APP_DETAILS]", "[USER]", "[SUBMITTER]", "[ENTRY_TITLE]", "[ENTRY_DETAILS]"), array($this->appTitle, $this->appDetails, $user, $submitter, $entry_title, $entry_details), $details);

	$data['DETAILS'] = addslashes($details);


	return $data;
    }
       
    

}