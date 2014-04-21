<?php

Yii::import('application.vendors.*');
require_once('facebook-php-sdk-b14edfa/src/facebookwrapper.php');

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class FacebookController extends CController
{

    public $fbUser;

    function __construct($auth = 1)
    {
	header('P3P: CP="CAO PSA OUR"');


	if ($auth) // disable it if only isPageLiked is used
	{
	    Yii::app()->params['facebook'] = new FacebookWrapper(array(
			'appId' => CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value4_text),
			'secret' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value5_text),
			'cookie' => true,
			'appName' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'APP_DETAILS'))->value4_text),
			'canvasPage' => "http://apps.facebook.com/".@CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value1)."/",
			'canvasUrl' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_URLS'))->value5_text),
			'permissions' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value2),
			'fileUpload' => true
		    ));


	    $this->authFacebook();
	}
    }

 
    function authFacebook()
    {
	if (IS_LOCAL)
	{
	    return $this->fbUser = array('id' => '100', 'first_name'=>'M', 'last_name'=>'Shahid', 'location'=>'Delhi', 'name' => 'M Shahid', 'email' => 'shahid_mau@yahoo.com', 'username' => 'shahidmau', 'location' => array('name' => 'Delhi'), 'country' => 'India', 'timezone' => '+5.5', 'link' => 'http://shahidmau.blogspot.com');
	}

	$facebook = Yii::app()->params['facebook'];


	$user = $facebook->getUser();

	$me = "";

	if ($user)
	{
	    try
	    {
		$uid = $facebook->getUser();
		$me = $facebook->api('/me');
	    }
	    catch (FacebookApiException $e)
	    {
		//print_r("<pre>" . $e . "</pre>");
	    }
	}


	if ($me)
	{
	    $this->fbUser = $me;
	    
	    Yii::app()->session['fbId'] = $uid;
	}
	else
	{
	    $appId = $facebook->getAppId();
	    $canvasUrl = $facebook->getCanvasPage();
	    $perms = $facebook->getPermissions();

	    $loginUrl = "https://www.facebook.com/dialog/oauth?scope=" . $perms . "&client_id=" . $facebook->getAppId() . "&redirect_uri=" . urlencode($canvasUrl);
	    echo("<script> top.location.href='" . $loginUrl . "'</script>");
	    Yii::app()->end();
	}
    }

    function getConfigValue($name)
    {
	$facebook = Yii::app()->params['facebook'];
	return $facebook->$name();
    }

    function saveUserToDb()
    {

	
	$fbUser = $this->fbUser;

	if (Yii::app()->session['fbUserSaved'] == 1 || $fbUser['id'] == '')
	{
	   // save everytime when it is on localhost, because if new columns are added in db then it gives error
	   if(IS_LOCAL == false)
	   {
		return false;
	   }
	}


	$dbUser = Users::model()->findByAttributes(array("userid" => $fbUser['id']));

	if ($dbUser)
	{
	    $user = $post = Users::model()->findByPk($dbUser['id']);
	}
	else
	{
	    $user = new Users;
	}
	

	

	$user->userid = $fbUser['id'];
	$user->username = $fbUser['username'];
	$user->name = $fbUser['name'];
	$user->first_name = $fbUser['first_name'];
	$user->last_name = $fbUser['last_name'];
	$user->email = $fbUser['email'];
	$user->city = $fbUser['location']['name'];
	$user->country = $fbUser['country'];
	$user->timezone = $fbUser['timezone'];
	$user->url = $fbUser['link'];
	$user->last_login = date("Y-m-d H:i:s");

	$user->save();

	Yii::app()->session['fbUserSaved'] = 1;

	return true;
    }

    private function parsePageSignedRequest()
    {
	if (isset($_REQUEST['signed_request']))
	{
	    $encoded_sig = null;
	    $payload = null;
	    list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
	    $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
	    $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
	    return $data;
	}
	return false;
    }

    public function isPageLiked()
    {
	if (IS_LOCAL)
	{
	    return true;
	}

	$signed_request = $_REQUEST["signed_request"];

	@list($encoded_sig, $payload) = explode('.', $signed_request, 2);

	$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

	$app_data = isset($data["app_data"]) ? $data["app_data"] : '';
	$_REQUEST["fb_page_id"] = $data["page"]["id"];
	$access_admin = $data["page"]["admin"] == 1;
	$has_liked = $data["page"]["liked"] == 1;

	return $has_liked;
    }

    //redirect to profile tab page from application page
    public function redirectToProfileTab($url)
    {
	if (IS_LOCAL)
	{
	    return false;
	}

	$url = ($url == '')?Yii::app()->params['facebook']['tabUrl']:$url; 
	
	if (!isset($_REQUEST['by_tab']))
	{
	    echo '<script>
		parent.location = "' . $url . '";
		</script>
	    ';
	    Yii::app()->end();
	}
    }

    function publishStream($userMessage, $pageLink, $picUrl, $postTitle, $postDetails,$user='me')
    {
	if (IS_LOCAL)
	{
	    return true;
	}
	
	$facebook = Yii::app()->params['facebook'];

	try
	{
	    $publishStream = $facebook->api("/{$user}/feed", 'post', array(
		'message' => $userMessage,
		'link' => $pageLink,
		'picture' => $picUrl,
		'name' => $postTitle,
		'description' => $postDetails,
		    )
	    );
	    
	    //print_r($publishStream);
	    //exit;
	    
	    //as $_GET['publish'] is set so remove it by redirecting user to the base url
	}
	catch (FacebookApiException $e)
	{
	    print_r($e);
	}
    }
    
    
   function getFacebookPhotos($albumID,$limit = 500)
    {
	//return dummy data if it is on localhost
	if (IS_LOCAL)
	{

	    return
		    array("data" => array(
			    array(
				'source' => 'http://localhost:8888/test/1.jpg',
				'picture' => 'http://localhost:8888/test/1.jpg'
			    ),
			    array(
				'source' => 'http://localhost:8888/test/2.jpg',
				'picture' => 'http://localhost:8888/test/2.jpg'
			    )
			)
	    );
	}
	
	
	$facebook = Yii::app()->params['facebook'];

	$photos = $facebook->api("/" . $albumID . "/photos?limit=".$limit);

	//print_r($albums);

	return $photos;
    }
    
    
    function getFriends()
    {
	if (IS_LOCAL)
	{
	    return true;
	}
	
	$facebook = Yii::app()->params['facebook'];
	
	return $facebook->api('/me/friends');
    }

    
    /**
     * upload photo to facebook albums and set it as profile picture.
     */
    function uploadPhotoToFB($photoPath, $albumID, $photoDescription)
    {
	if(IS_LOCAL){ return 1; }
	
	$facebook = Yii::app()->params['facebook'];
	
	

	//Upload a photo to album of ID...
	$photo_details = array(
	    'message' => $photoDescription
	);


	$photo_details['image'] = '@' . $photoPath; //relative photo path
	
	
	$data = $facebook->api('/' . $albumID . '/photos', 'post', $photo_details);

	
	//echo '<a href="http://www.facebook.com/photo.php?fbid='.$upload_photo['id'].'" target="_blank">View my photo</a>';

	$picture = $facebook->api('/'.$data['id']);
	
	
	return array($data,$picture);
    }
    
    function getFbAlbumID($albumName)
    {
	if(IS_LOCAL){ return 1; }

	$facebook = Yii::app()->params['facebook'];

	$albums = $facebook->api('/me/albums');
	foreach ($albums['data'] as $album)
	{
	    if ($album['name'] == $albumName)
	    {
		return $album['id'];
	    }
	}

	return 0;
    }

    function createFbAlbum($albumName, $albumDetails)
    {
	$facebook = Yii::app()->params['facebook'];


	$album_details = array(
	    'message' => $albumDetails,
	    'name' => $albumName
	);

	$create_album = $facebook->api('/me/albums', 'post', $album_details);

	return $create_album['id'];
    }
    
    
    function getFacebookAlbums($value='', $limit='500', $after='')
    {
	//return dummy data if it is on localhost
	if (IS_LOCAL)
	{

	    return
		    array("data" => array(
			    array(
				'id' => '1',
				'name' => 'test album'
			    )
			)
	    );
	}


	$facebook = Yii::app()->params['facebook'];

	$albums = $facebook->api('me/albums?until&value='.$value.'&redirect=1&limit='.$limit.'&after='.$after);

	//print_r($albums);

	return $albums;
    }
    
    
}