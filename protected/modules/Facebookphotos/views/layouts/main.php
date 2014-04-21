<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" <?php echo ($_SERVER['HTTP_HOST']!="localhost:8888")?'style="overflow: hidden"':''; ?> >

	
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	

	
	<?php 
	
	    $baseUrl = Yii::app()->baseUrl; 
	    $cs = Yii::app()->getClientScript();
	    

	    $cs->registerCssFile($baseUrl.'/css/facebook.css');

	    echo Yii::app()->assetManager->publish(Yii::getPathOfAlias('Facebookphotos').'\js\script.js');

	?>
	
	
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		
	
</head>

<body>
    
    <img src="images/1.jpg" />

<div class="container" id="page">
    zzzzzzzz
<?php echo $content; ?>
</div>



	
</body>
    
    
    
    
</html>
