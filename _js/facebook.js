FB.init({
    appId  : 353246398104780,
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
});


window.fbAsyncInit = function() {
    FB.Canvas.setAutoResize();
}


window.fbAsyncInit = function() {
    FB.Canvas.setSize();
}
// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
    FB.Canvas.setSize();
}

 
function invite_friends(){
    FB.ui({
        method: 'apprequests',
        message: 'Invite your friends!'
    });
}


function sendFriendInviteGlobal(title,message)
{

    FB.ui({
        method: 'apprequests', 
        message: message, 
        title: title
    },
    function(response) {
			
        if (response && response.to) 
        {				
            tid=response.to;
            //Sent!
            
        } else {
    //Not Sent
    }
    }); 
}




$(document).ready(function() {


    sizeChangeCallback();

});
 
 
$(document).mouseover(function() {
    sizeChangeCallback();
});



function publish_stream_pop(post_name,details,url,pic)
{
	 FB.ui(
	   {
		 method: 'feed',
		 name: post_name,
		 link: url,
		 picture: pic,
		 caption: '',
		 description: details,
		 message: ''
	   },
	   function(response) {
		 if (response && response.post_id) {
		  //alert('Post was published.');
		 } else {
		 //alert('Post was not published.');
		 }
	   }
	 );


}
		
//publish_stream_pop("MS Photo Contests",'you can win prize here','http://apps.facebook.com/contest','http://smsread.com/contest/logo.jpeg');




function publish_stream(body_msg,post_name,details,pic)
{
	var body = body_msg;
	FB.api('/me/feed', 'post', 
	{
	 message: body, 
	 name: post_name,
	 caption: 'http://apps.facebook.com/GreatestActsOfLove_PH',
	 description: (details),
	 picture: pic,
	 link: 'http://apps.facebook.com/GreatestActsOfLove_PH'
	
	}, function(response)
	{
            //alert(response.toSource());
            
		if (!response || response.error)
		{
		   //alert('Error occured'+response.error);
		}
		else
		{
		    //alert('Post ID: ' + response.id);
		}
	});


}
		
//publish_stream('I have just published a photo album',"My first album",'this is my full detail here',22);





function invite_friends(msg){
FB.ui({ method: 'apprequests',
message: msg});
}	  



function preview_photo(img_src)
{
    
    if(img_src!='')
    {
        $("#browse_area").html("<div style='color:white'>(image attached)</div>");
    }

}

function show_box(url) {
	box=window.open(url,'name','height=500,width=700,scrollbars=yes');
	if (window.focus) {box.focus()}
	return false;
}

function remove_fb_pic()
{
	document.yw0.fb_photo.value='';
	document.getElementById('browse_area').style.display='';
	document.getElementById('fb_area').style.display='none';
}


