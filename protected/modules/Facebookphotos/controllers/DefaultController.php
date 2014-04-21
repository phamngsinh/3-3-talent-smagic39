<?php

class DefaultController extends Controller
{
	
    
    
	public function actionIndex()
	{	    
	    $this->render('index');
	}
	   
	
	function actionAlbums()
	{

	    
	    $facebook = new FacebookController();
	    $albums = $facebook->getFacebookAlbums();
	    
	    $this->renderPartial('list_albums',array("albums"=>$albums));
	}
	
	
	function actionListPhotos($albumID)
	{
	     $facebook = new FacebookController();
	     

	     $photos = $facebook->getFacebookPhotos($albumID);	     	          
	     
	     $this->renderPartial('fb_photos_listing',array("albumID"=>$albumID,"photos"=>$photos));
	}
	
	
	
	
	function actionShowSingleFBPhoto($photoUrl,$logoPosition,$signed_request)
	{
	     $this->renderPartial('fb_single_photo',array("photoUrl"=>$photoUrl,'logoPosition'=>$logoPosition));       
	}

	


	function actionChooseFbPhotos($signed_request)
	{
	    $this->render('fb_photos');
	}



    
}