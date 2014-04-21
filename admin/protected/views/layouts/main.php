
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
   
	
</head>

<body>

<div class="container" id="page">

	<div id="header">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.gif" />
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>(Yii::app()->user->id=='admin')?true:false),
                            
				
				
				    
				array('label'=>'Landing Questions', 'url'=>array('/questions/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
				
			        array('label'=>'Vault', 'url'=>array('/vault/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
			    
				array('label'=>'Upcoming Deals', 'url'=>array('/upcomingdeals/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
				
				array('label'=>'Face Off', 'url'=>array('/entries/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),	
			    
				array('label'=>'Prizes', 'url'=>array('/prizes/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
			    
				array('label'=>'Whats Up', 'url'=>array('/whatsup/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),	
			    
				//array('label'=>'User Entries', 'url'=>array('/videos/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
                                array('label'=>'Users', 'url'=>array('/users/admin'), 'visible'=>(Yii::app()->user->id!="")?true:false),
			    
				
                                array('label'=>'Pages', 'url'=>array('/page/page/admin'), 'visible'=>(Yii::app()->user->id!='')?true:false),
				 
				array('label'=>'Downloads', 'url'=>array('/ms/downloads'), 'visible'=>(Yii::app()->user->id!="")?true:false),   
				
				
				 array('label'=>'Settings', 'url'=>array('/ms/updatesingle'), 'visible'=>(Yii::app()->user->id!="")?true:false),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
For any support, please contact <a href="mailto:amol.chawathe@fountaintechies.com" >amol.chawathe@fountaintechies.com</a>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>