<?php


/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class CommonMethods extends CController
{
    
    /*
    * method to fix http and https anamolies of the facebook
    */
    public static  function fixHttp($path)
    {
	$path = str_replace("https:","",$path);
	$path = str_replace("http:","",$path);
	return $path;
    }
    
    /*
     * method to text wrap
     */
    static function limitText($text, $length=55)
    {
	
	
	
	
	if (strlen($text) > $length)
	{
	    return CHtml::encode(substr($text, 0, $length)) . "...";
	}
	else
	{
	    return CHtml::encode($text);
	}
    }
    
    
    

    /*
     * method to get video id of the youtube from given youtube url
     */
    public static function getYoutubeVideoId($input) //url or code
    {

	if (preg_match('%(?:youtube\.com/(?:user/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $input, $result))
	{
	    $video_id = $result[1];
	}
	if (!isset($video_id))
	{

	    parse_str(parse_url($input, PHP_URL_QUERY), $url_arr);


	    if (isset($url_arr['v']))
	    {
		return $url_arr['v'];
	    }


	    return end(explode("/", $input));

	    return $input;
	}
	else
	{
	    return $video_id;
	}
    }

}