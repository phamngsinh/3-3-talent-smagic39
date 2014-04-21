<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AppRestrictions extends CController
{
    
    function __construct($id, $module = '')
    {
	 
    }
    
    public function statusChecking()
    {
	$model = Ms::model()->findByAttributes(array('var_name'=>'APPLICATION_STATUS'));
	
	//if inactive or expired
	if($model->value6_int == 0 or $model->value6_int == 2)
	{
	    echo @CHtml::decode($model->value4_text);
	    Yii::app()->end();
	}
    }
    
    public function redirectToProfileTab($tabUrl)
    {
	if($tabUrl != '')
	{
	    $facebook = new FacebookController(0); //not used auth because we only want it for fb like
	    $facebook->redirectToProfileTab($tabUrl); //redirect to profile tab page from application page
	}
    }
    
    
    public function prelikeChecking()
    {
	$model = Ms::model()->findByAttributes(array('var_name'=>'PRELIKE_PAGE'));
	
	if($model->value1 != 'Disable')
	{
	    $facebook = new FacebookController(0); //not used auth because we only want it for fb like
	    
	    if (!$facebook->isPageLiked())
	    {
		if($model->value1 == "Custom HTML")
		{
		    echo CHtml::decode($model->value4_text);
		}
		elseif($model->value1 == "Message Overlay")
		{
		    echo CHtml::decode($model->value4_text);
		}
		
		Yii::app()->end();
	    }
	}
	
    }


    public function blockUnblockUsers($fbId)
    {
	if($fbId != '')
	{
	    $isAllowed = 1;
	    
	    $model = Ms::model()->findByAttributes(array('var_name'=>'ALLOW_BLOCK_USERS'));
	    
	    $usersArr = explode(",", $model->value5_text);
	    
	    //allow only selected users
	    if($model->value6_int == 2)
	    {
		$isAllowed = 0;
		foreach ($usersArr as $u)
		{
		    if($fbId == trim($u)){ $isAllowed = 1; }
		}		
	    }
	    
	    //block only selected users
	    if($model->value6_int == 3)
	    {
		foreach ($usersArr as $u)
		{
		    if($fbId == trim($u)){ $isAllowed = 0; }
		}		
	    }
	    
	    if($isAllowed == 0)
	    {
		echo CHtml::decode($model->value4_text);
		Yii::app()->end();
	    }
	    
	}
	
    }
    
    
    public function deviceChecking()
    {
	$model = Ms::model()->findByAttributes(array('var_name'=>'MOBILE_PHONES_STATUS'));
	
	//show custom html (if mobile dvices)
	if($model->value6_int == 2)
	{
	    $detect = new Mobile_Detect;

	    if ($detect->isMobile() and !$detect->isTablet() ) 
	    {
		echo CHtml::decode($model->value4_text);
		Yii::app()->end();
	    }
	}
	


    }
    
    

}