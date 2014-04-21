<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;
 
    public function authenticate()
    {
        $record=Users::model()->findByAttributes(array('username'=>$this->username,"is_active"=>1));
        if($record===null)
	{
            $this->errorCode=self::ERROR_USERNAME_INVALID;	    	   
	}
	else if($record->password!==md5($this->password))
	{
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
	}
        else
        {
	    $record->visits = $record->visits+1;
	    $record->last_login = new CDbExpression('NOW()');
	    
	    $record->save();
	    
            $this->id=$record->id;
            $this->setState('role', $record->role);            
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}