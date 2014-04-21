<?php

/**
 * Coded on 30 nov 2012
 *  1) this can upload and resize(optional) image from the computer. basically optimized for upclickScript.php 
 *  2) this can upload and resize(optional) image from the facebook albums. basically optimized for facebookphotos module  
 */
class PhotoUploader extends CController
{
    
    protected $fileData;
    protected $fileName;
    protected $destination;
    protected $ext;
    
    public $destinationFolder;

    var $resizeType = "adaptiveResize"; //resize,adaptiveResize
    
    function __construct($destinationFolder = 'photos')
    {
	 $this->destinationFolder = $destinationFolder;
    }
    
    
    //it is used to upload photo from the computer (implemented in "dreyers_moments" app)
    public function upload($fileData, $saveAs, $resize='', $allowedExtensions = "jpg, png, gif", $maxFileSize = 2097152) //2MB
    {
	
	$tmp_file_name = $fileData['tmp_name'];

	$ext = strtolower(end(explode(".", $fileData['name'])));


	$allowedExtensions = str_replace(" ", "", $allowedExtensions);
	$allowedExtensionsArray = explode(",", $allowedExtensions);

	//validate extensions
	if (!in_array($ext, $allowedExtensionsArray))
	{
	    return json_encode(array("msg" => 'invalid_file_type',"ext"=>$ext));
	    exit;
	}

	$fileSize = filesize($tmp_file_name);


	if ($fileSize > $maxFileSize)
	{
	    return json_encode(array("msg" => 'file_size_exceeded'));
	    exit;
	}
	
	
	
	$image_name = $saveAs.".".$ext;
	
	
	$imgPath = $this->destinationFolder . '/' . $image_name;
	
	$this->destination = $imgPath;
	
	
	
	$ok = move_uploaded_file($tmp_file_name, $imgPath);
	
	//$this->resizeAndSaveImage($image_name);

	
	list($width, $height, $type, $attr) = getimagesize($imgPath);

	if(is_array($resize))
	{	    	    
	    foreach ($resize as $rs)
	    {
		$dim = explode("x",$rs);
		$w = $dim[0];
		$h = $dim[1];
		
		$thumbFactory = PhpThumbFactory::create($this->destination); 	
	    
		$resizeType = $this->resizeType;
	    
		$resizedDest =  $this->destinationFolder . '/'.trim($w).'x'.trim($h).'/' . $image_name;
	    
		$thumbFactory->$resizeType((int)trim($w),(int)trim($h))->save($resizedDest);
	    }
	}
	

	return json_encode(array("msg" => 'Uploaded', "filename" => $image_name, "destination"=>$this->destination, "resizedDestination"=>$resizedDest, "width"=>$width, "height"=>$height, "ext"=>$ext, "type"=>$type, "attr"=>$attr));
    }
    
    
    //it is used to save facebook albums photos (implemented in "dreyers_moments" app)
    public function urlImgSaveResizePreview($imageUrl, $imageName, $resize = '')
    {
	
	
	//saving original
	$thumbFactory = PhpThumbFactory::create($imageUrl);	
	$thumbFactory->save($this->destinationFolder.'/' . $imageName);	
	
	if($resize != '')
	{
	    $dimensionsArr = explode(",", $resize);
	    foreach ($dimensionsArr as $dArr)
	    {
		$whArr = explode("x",$dArr);
		$w = (int)trim($whArr[0]);
		$h = (int)trim($whArr[1]);
		
		$thumbFactory = PhpThumbFactory::create($this->destinationFolder.'/' . $imageName);
		
		$resizeType = $this->resizeType;
		
		$thumbFactory->$resizeType($w, $h)->save($this->destinationFolder."/{$w}x{$h}/" . $imageName);
	    }
	}
	
	//last resized image is displayed of $resize param.
	$thumbFactory->show();
    }
    

}