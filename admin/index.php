<?php

ini_set('display_errors', 1);

if($_SERVER['HTTP_HOST']=="192.168.1.189" or $_SERVER['HTTP_HOST']=="localhost:8888")
{
	define("IS_LOCAL",true);
}
else
{
    define("IS_LOCAL",false);
}

if(IS_LOCAL)
{
// change the following paths if necessary
   //$yii=dirname(__FILE__).'../../yii/framework/yii.php';
   $yii='../../yii/framework/yii.php';
   
    // remove the following lines when in production mode
    defined('YII_DEBUG') or define('YII_DEBUG',true);
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

   
}
else
{
     $yii='../../yii/framework/yii.php';
     
}





$config=dirname(__FILE__).'/protected/config/main.php';


    

require_once($yii);
Yii::createWebApplication($config)->run();
