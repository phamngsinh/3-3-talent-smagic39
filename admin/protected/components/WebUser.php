<?php 
class WebUser extends CWebUser
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    
    var $role;
    public function checkAccess($operation, $params=array())
    {	
        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }
	

        $role = $this->getState("role");		
        if ($role === 'super admin') {
            return true; //super admin role has access to everything
        }
	
        // allow access if the operation request is the current user's role
	
	/*
	if (strstr($operation,$role) !== false) { // Check if multiple roles are available
            return true;
        }	 
	 */
	
	
        return ($operation === $role);
    }
}