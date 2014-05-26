<?php  
$appId = CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value4_text); 
?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '<?php echo $appId?>', // App ID from the App Dashboard
      //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });


    // Additional initialization code such as adding Event Listeners goes here

  };

  // Load the SDK's source Asynchronously
  // Note that the debug version is being actively developed and might 
  // contain some type checks that are overly strict. 
  // Please report such bugs using the bugs tool.
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, /*debug*/ false));
   

   function resizePage()
   {
      FB.Canvas.setSize();
   }
   
   
    window.onload=function(){ resizePage(); };
    
   // window.onmouseover=function(){ resizePage(); };



</script>

<script>
    
function inviteFriendsPre()
{

   
    FB.ui({
    method: 'apprequests',
    message: 'Have a look of My NTUC Good Deeds !'
    });
    //$("#thankyou").css("display","block");
    
}






    

function dialogShare(recipeName,link,descriptions,img)
{
    
 var  msg =   $(descriptions).val();

//msg = msg.replace("~ash~", '"');    
//msg = msg.replace("~apos~", "'");
    
	 FB.ui(
	   {
		 method: 'feed',
		 name: recipeName,
		 link: 'https://apps.facebook.com/threethreetalent',
		 picture: img,
		 caption: '33 TALENT',
		 description: msg,
		 message: ''
	    }, function(response){});
           

}

</script>    