/***
@author Mohammad Shahid <mshahid85@gmail.com>
@date 21-01-2011
**/


Implementing facebook on Yii framework


1) Paste facebook api source code in protected/vendors directory (including facebookwrapper.php  which is written by me for easycool facebook app)
2) in protected/components paste FacebookController.php
3) change configuration in config/main.php param section
4) in SiteController use as below

$facebook = new FacebookController();

$uid = $facebook->fbUser['id'];

$getAppId = $facebook->getConfigValue('getAppId');
Yii::app()->params['facebook']['getAppId'];


5) config file

        'facebook' => array(
        'appId' => '205332696223026',
        'secret' => 'fd9f3e221cebb1b08b5564a0609e8b5a',
        'cookie' => true,
        'appName' => 'Easycool',
        'canvasPage' => 'http://apps.facebook.com/easycool/',
        'canvasUrl' => 'http://ogilvyapplications.com/fb/easycool/',
        'permissions' => 'publish_stream, email, videos'
    ),


6) Facebook Page like test
$facebook = new FacebookController('0');  // set zero (0) if auth is note required and only to test facebook page like
$facebook->isPageLiked()


-- 
Regards,

Shahid 