<?php

/**
 * @author Mohammad Shahid (mshahid85@gmail.com , zarrtechnologies.com)
 * @version 1.0
 * @date 26 May 2012
 * @uses This component uses the Yii phpthumb extension
 * This component resizes and saves the image, component will automatically create folders for specified dimensions. 
 * @usage 
 * $resizer = new ZarrImageResizer;
 * $resizer->dimensions = array("100x100","400x400"); //Width x Height
 * $resizer->resizeAndSave($model->image); //pass image model
 * 
 * 
 * tested for adaptiveresize only, so component is still yet to be fully developed.
 */


class ZarrImageResizer extends CComponent
{
	 
	var $resizeType = "adaptiveResize";
	var $inputImageName;
	var $outputImageName;
	var $destinationFolder = "uploads";
	var $dimensions = array();
	var $imageExtension;
	
	function resizeAndSave($inputImageModel,$outputImageName='')  //pass second param  .(dot)  to have the output filename same as input filename
	{
	    
	    
	   $this->inputImageName = $inputImageModel->name;
	   
	  
	   
	   if($this->imageExtension == '')
	   {
		$this->imageExtension = $this->geImageExtension();
	   }
	  
	   $calculatedOutputImageName = ($outputImageName == '')?rand()."-".time().".".$this->imageExtension."":$outputImageName;
	   
	   $calculatedOutputImageName = ($outputImageName == '.')?$inputImageModel->name."":$calculatedOutputImageName;
	   
	   $this->outputImageName = $calculatedOutputImageName;
	   
	   
	   
	   //save orignal file
	   $inputImageModel->saveAs($this->destinationFolder .DIRECTORY_SEPARATOR. $calculatedOutputImageName);
	  
	   
	   
	   //resize and save image
	   if(count($this->dimensions)>0)
	   {	       
	       
	       foreach ($this->dimensions as $dim)		   
	       {
		   $thumbFactory = PhpThumbFactory::create($this->destinationFolder . DIRECTORY_SEPARATOR . $calculatedOutputImageName); 
		   $dimArr = explode("x", trim($dim));		   
		   
		   $resizeType = $this->resizeType;
		   
		   if(!is_dir($this->destinationFolder . DIRECTORY_SEPARATOR .$dim))
		   {
		       mkdir($this->destinationFolder . DIRECTORY_SEPARATOR .$dim);
		   }
		   		   		   
		   
		   $thumbFactory->$resizeType((int)trim($dimArr[0]), (int)trim($dimArr[1]))->save($this->destinationFolder . DIRECTORY_SEPARATOR . $dim . DIRECTORY_SEPARATOR . $calculatedOutputImageName);
		   
	       }
	       
		
	   }
	    
	    return true;
	}
	
	public function geImageExtension($image)
	{
	    
	    $image = ($image == '')?$this->inputImageName:$image;
	    
	    return end(explode(".", $image));
	}
	
	
	/*
	 * cache method is used to cache external images on our own server.
	 */
	
	public static function cache($imageSource,$uniqueName,$ext='',$dim='100x100',$resizeType='adaptiveResize') //don't put image extension in 2nd param
	{
	    
	    /*
	     *  usage example ::
	     *  echo '<img src="'.ZarrImageResizer::cache($data->photo,'image-'.$data->id,'','100x100').'" />';
	     *  use ext param in case of dynamic image where no extension is give e.g. https://graph.facebook.com/100/picture?type=large
	     * 
	     *  Note :: there must be a folder  "uploads/cache"  exist at the root of the application.
	    */
	   
	    
	    $ext = ($ext!='')?$ext:end(explode(".", $imageSource));
	    
	    
	    $uniqueName = $uniqueName.".".$ext;
	    	    
	    
	    $folder = "uploads".DIRECTORY_SEPARATOR."cache".DIRECTORY_SEPARATOR;
	    
	    $file = $folder."".$uniqueName;
	 
	    if(!file_exists($file))
	    {
		$outputImage = $folder."".$uniqueName;


		$thumbFactory = PhpThumbFactory::create($imageSource); 
		$dimArr = explode("x", trim($dim));		   
		   
		$thumbFactory->$resizeType((int)trim($dimArr[0]), (int)trim($dimArr[1]))->save($file);
		   
	    }
	   
	    return Yii::app()->baseUrl."/uploads/cache/".$uniqueName;
	}
	
}