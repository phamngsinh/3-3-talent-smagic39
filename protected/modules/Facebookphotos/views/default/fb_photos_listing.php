

<style>
    #fb_photos_listings li{
	list-style: none;
	display: inline;
	padding:3px;
    }
    
  
    </style>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    

    <img src="images/progress.gif" style="padding-left:45px; display: none" id="progressImg" />
    
<div id="fb_photos_listings" >
    

    
<ul>
    <?php
  	   foreach($photos['data'] as $photo)
	  {
	     echo "<li><a href='javascript:void(0)' onclick='select_pic(\"".$photo['source']."\",\"{$photo['picture']}\")' ><img src='{$photo['picture']}' height='80' /></a></li>";
	  }
    
    ?>
    </ul>
</div>    
    
    
    
<script>



    
    
    
function select_pic(url,url_short) 
{
	
	
	
	
	
	
	
	
	//generating unique image name //
	fileExt = url.split('.').pop();

	var date = new Date();
	var components = [
	    date.getYear(),
	    date.getMonth(),
	    date.getDate(),
	    date.getHours(),
	    date.getMinutes(),
	    date.getSeconds(),
	    date.getMilliseconds()
	];

	var timestamp = components.join("");

	var randomnumber=Math.floor(Math.random()*11)

	imageName = "fb_"+randomnumber+"-"+timestamp+"."+fileExt;
	////
	
	
	window.opener.fbPhotosCallback(url,url_short,fileExt,imageName);
	
	window.close();
	
	return;
	
	return false;

	window.opener.window.document.getElementById('Entries_photo').value=url;

	//window.opener.window.document.getElementById('Videos_photo').value='';
	
	$("#fb_photos_listings").css("opacity","0.3");
	$("#progressImg").show();
	
	
	 img = url;
	   
	 img = "index.php?r=site/imagepreviewSmall&by_ajax=1&imageUrl="+url+"&image_name="+imageName;
	
	    
    
	
	 imgStored = "cups/raw/190x190/"+imageName;
	 
	 window.opener.window.document.getElementById('uploadProgress').style.display='block';
	 
	 
	 
	 //save
	 window.opener.saveImg(img);
	 
	 
	  var myImage = new Image();
	    myImage.onload = function(){
		timedOut(imgStored)
	    };
	    myImage.src = img;
    
	    
	    return;
    
	    
	    setTimeout(function(){
	    timedOut(imgStored)
	    }, 10000)
	
	 return;   
	
	 //$("#previewSmallTd").css("background","url("+img+") center no-repeat");
	
	 //window.opener.window.document.getElementById('previewSmallTd').style.backgroundImage = 'url('+img+')';
	
	//window.opener.window.document.getElementById('photoPreview').src = img;	
	
	
	window.opener.window.document.getElementById('previewSmallTd').style.backgroundImage = 'url('+img+')';
	
	
	//window.opener.document.getElementById('demoPhoto').style.display='none';
	//window.opener.document.getElementById('fb_area').style.display='';
	//window.opener.document.getElementById('fb_area').innerHTML='<img src="'+url_short+'" /><br /><a href="javascript:remove_fb_pic()" >(remove)</a>';
	
	window.close();
}


function timedOut(imgStored)
{
    window.opener.window.document.getElementById('uploadProgress').style.display='none';
    
    //and show
    window.opener.changeImg(imgStored);

    window.close();
}

</script>

<a style="font-size: 12px;
font-weight: bold;
text-decoration: none;
margin: 45px;
color: #3B5998;
font-family: Verdana, Arial, Helvetica, sans-serif;" href="javascript:history.go(-1)" > << go back </a>

