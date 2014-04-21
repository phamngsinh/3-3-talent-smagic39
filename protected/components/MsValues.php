<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class MsValues extends CController
{
    
    function __construct($id, $module = '')
    {
	 
    }
    
    public static function get($var_name)
    {
	return Ms::model()->findByAttributes(array('var_name'=>$var_name));		
    }

}