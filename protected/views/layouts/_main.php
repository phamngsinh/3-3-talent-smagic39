<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" <?php echo (!IS_LOCAL)?'style="overflow: hidden"':''; ?> >

	
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	

	
	<?php 
	
	    $baseUrl = Yii::app()->baseUrl; 
	    $cs = Yii::app()->getClientScript();
	    
	    $cs->registerCssFile($baseUrl.'/css/reset.css');
	    $cs->registerCssFile($baseUrl.'/css/main.css');
	    //$cs->registerCssFile($baseUrl.'/css/form.css');
	    //$cs->registerCssFile($baseUrl.'/css/facebook.css');
	    
	    
	  
	    
	    $cs->registerScriptFile("js/jquery-1.8.2.js", CClientScript::POS_HEAD);



	    
	    $cs->registerScriptFile($baseUrl.'/js/main.js');
	    
	   //$cs->registerScriptFile($baseUrl.'/js/upclick-min.js');
	       

	    
	    $cs->registerScriptFile($baseUrl.'/vendors/validateForm/js/languages/jquery.validationEngine-en.js');
	    $cs->registerScriptFile($baseUrl.'/vendors/validateForm/js/jquery.validationEngine.js');		    	    
	    $cs->registerCssFile($baseUrl.'/vendors/validateForm/css/validationEngine.jquery.css');
	    
	    
	    
	      //msg popup plugin
	     /*$cs->registerScriptFile($baseUrl.'/vendors/iPrompt/jquery-impromptu.js');
	     $cs->registerCssFile($baseUrl.'/vendors/iPrompt/jquery-impromptu.css');*/
	     
	     
	     $cs->registerScriptFile($baseUrl.'/js/radio-style.js');
	    
	     $cs->registerScriptFile($baseUrl.'/js/jquery-ui.min.js');
	     
	     $cs->registerScriptFile($baseUrl.'/js/block.js');
		 
		 $cs->registerScriptFile($baseUrl.'/js/ui.js');
	
	     
	     
	
	     $cs->registerCssFile($baseUrl.'/vendors/scroller/jquery.mCustomScrollbar.css');
	     $cs->registerScriptFile($baseUrl.'/vendors/scroller/jquery.mousewheel.min.js');
	     $cs->registerScriptFile($baseUrl.'/vendors/scroller/jquery.mCustomScrollbar.js');
	     
	     // popup files
	     $cs->registerScriptFile($baseUrl.'/vendors/iPrompt/jquery-impromptu.js');
         $cs->registerCssFile($baseUrl.'/vendors/iPrompt/jquery-impromptu.css');
	     
	     
	?>
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		



<script src="js/ui.js"></script>
<script>
function slide_next(id,total)
			{
			 
			 console.log(id);
			 
			 id = parseInt(id);
			 
			 total = total-1;
			 
		
			 
			 if(id <=total)
			 	{
			     
				 
				
				$(".list"+id).css("display","none");
				 
				
				 
				 id = id+1;			 
			 
			     
				 
				 $(".list"+id).show("slide", { direction: "left" }, 1000);
				 
				 $(".left").attr("title",id);
				 
				 $(".right").attr("title",id);
				
				}
				 else if(id > total)
				 	{
						
						
						
						$(".list"+id).css("display","none");
				 
						
						 
						 id = 1;		 
					 
						 
						 //$(".list"+id).css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);
						 
						 $(".list"+id).show("slide", { direction: "left" }, 1000);
						 
						 $(".left").attr("title",id);
						 
						 $(".right").attr("title",id);
						
					}
			 
				 
				
			 
			 
			}
		
		function slide_previous(id,total)
			{
			 
			 console.log(id);
			 
			 id = parseInt(id);
			 
			 
			 console.log(total);
			 
			 if(id > 1)
			 	{
			 
					
					 
					 $(".list"+id).css("display","none");
					 
					
					 
					 id = id-1;
			 
				    
				 
				     $(".list"+id).show("slide", { direction: "right" }, 1000);
					
				    $(".left").attr("title",id);
					 
				    $(".right").attr("title",id);
					
				}
				 else if(id == 1)
				 	{
						 
						$(".list"+id).css("display","none");
						
						id = total;
						
						$(".list"+id).show("slide", { direction: "right" }, 1000);
					
						$(".left").attr("title",id);
						 
						$(".right").attr("title",id);
						 
					}
					
			 
			  
			 
			}
</script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	
</head>

<body>
    

    
<!--------content----->
<?php echo $content; ?>
<!--------content----->



    
    
    
    
    
    


<?php if(!IS_LOCAL){ ?>
<div id="fb-root"></div>
<!-- removed http because it was giving err in ie in SSL mode -->
<script src="//connect.facebook.net/en_US/all.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/facebook.js"></script>



<!-- some hidden fields for facebook -->
<input type="hidden" value="<?php echo $this->nowUserName; ?>" name="nowUserName" id="nowUserName" />
<input type="hidden" value="<?php echo $this->nowUserFbId; ?>" name="nowUserFbId" id="nowUserFbId" />
<input type="hidden" value="<?php echo $this->fbConfigurations['appId']; ?>" name="appId" id="appId" />
<input type="hidden" value="<?php echo $this->fbConfigurations['appName']; ?>" name="appName" id="appName" />
<input type="hidden" value="<?php echo $this->fbConfigurations['canvasPage']; ?>" name="canvasPage" id="canvasPage" />
<input type="hidden" value="<?php echo $this->fbConfigurations['canvasUrl']; ?>" name="canvasUrl" id="canvasUrl" />
<input type="hidden" value="<?php echo $this->fbConfigurations['tabUrl']; ?>" name="tabUrl" id="tabUrl" />
<!-- -->


<?php 
	$nowMethod = $this->getAction()->getId();
	$nowController = $this->getId();
	    ?>
<?php
if($nowMethod == 'submitStep1'){
?>
<!-- it is moved here from submit page because i.e. had issue -->
<?php echo $this->renderPartial("upclickScript",array("uploaderID"=>"1")) ?>
<!-- it is moved here from submit page because i.e. had issue -->
<?php } ?>        


    
	

</body>
</html>