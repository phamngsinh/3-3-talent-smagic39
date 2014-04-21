<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class TimezoneController extends CController
{

    public static function set($timezone)
    {
	if ($timezone == '')
	{
	    return;
	}
	elseif($timezone == 'Singapore')
	{
	    $mysql = "+08:00";
	    $php = "Asia/Singapore";
	}
	elseif($timezone == "India")
	{
	    $mysql = "+05:30";
	    $php = "Asia/Calcutta";
	}
	
	
	Yii::app()->getDb()->createCommand("SET time_zone='{$mysql}'")->execute();
	
	date_default_timezone_set( $php );
	
	
    }

}