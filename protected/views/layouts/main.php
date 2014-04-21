<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<title>Job Board - Talent Recruit</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
  


</head>


<body>
<!--***********header start*************-->
	<div id="header">
    	<div class="wrapper">
            <div class="company-name"> <a href="index.html"><img src="images/company-logo.png" width="234" height="80" alt=""></a>
          </div>
            <!--company-name end-->
            
        <div class="header-nav">
              	<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
				array('label'=>'job board', 'url'=>array('page/index')),
				array('label'=>'about', 'url'=>array('page/about')),
				array('label'=>'our team', 'url'=>array('page/teams')),
				array('label'=>'testimonials', 'url'=>array('page/testimonials')),
				array('label'=>'contact us', 'url'=>array('page/contact')),
			),
		)); ?>
                    <div class="clear"></div>
          </div><!--header-nav end-->
                    <div class="clear"></div>
 		</div>
        <!--wrapper header-->
                                   
    </div><!--header end-->
    
<!--***********header end*************-->



<!--***********content start*************-->
<div class="wrapper">
<div id="content">
        <div class="slide-banner">
            <img src="images/banner.jpg" alt="banner" width="810" height="310" />
       </div><!--slider banner end-->

		<div class="main-content">
        	<?php echo $content; ?>
            
        </div>
        <!--main-content end-->
                    
    </div>
    <!--contents-->
    
    </div>
    <!--wrapper main-content-->
    <!--***********content end*************-->




<!--***********footer start*************-->
	<div id="footer">
        	<div class="footer-top">
       	    <img src="images/footer-bg.png" width="810" height="46" alt="">
            </div>
            
            <div class="footer-bottom">
            <div class="wrapper">
                <div class="footer-nav">
                      <ul>
                        <li><a href="job-board.html">job board</a></li>
                        <li><a href="about.html" class="hover">about</a></li>
                        <li><a href="our-team.html">our team</a></li>
                        <li><a href="testimonials.html">testimonials</a></li>
                        <li><a href="contact-us.html">contact us</a></li>
                      </ul>
                </div>
                <!--footer-nav end-->
                
                <div class="footer-left">
                Copyright &copy; 2014. All Rights Reserved by <a href="http://33talent.com" target="_blank"><span>33Talent</span></a>
              </div>
                <!--footer-left end-->
                
                <div class="footer-right">
                Site Developed by <a href="http://fountaintechies.com/" target="_blank"><span>fountaintechies.com</span></a>
              </div>
                <!--footer-right end-->
                        <div class="clear"></div>
        </div>
        <!--wrapper footer-->
          	</div>
            <!--footer-bottom-->
		
        
    </div><!--footer end-->
<!--***********footer end*************-->

</body>


</html>
