function getS(number)
{
    if(number == 1){return '';}
    return 's';
}

function secondsToTime(secs)
{
    
    if(secs > 3600)
    {
        hours = Math.round(secs / 3600);
        return hours+' Jam'+getS(hours);
    }
    
    if(secs > 60)
    {
        minutes = Math.round(secs / 60);
        return minutes+' Menit'+getS(minutes);
    }
    return secs+' Detik'+getS(secs);
    
}

function voteUp(entryId,postUser,pic,signed_request,voteValue,votetype)
{
    
	if(votetype == 1)
		{
			 
			// $(".favour_img").hide();
			 $(".voteProgressImg_favour").show();
		}
		 else
		 	{
				 
				 //$(".against_img").hide();
				 $(".voteProgressImg_against").show();
			}
    
    

  
     
    $.ajax({
        url: "index.php?r=site/DoVoteUp&entryId="+entryId+"&signed_request="+signed_request+"&voteValue="+voteValue+"&votetype="+votetype,
        context: document.body,
        async: true,
        success: function(out)
        {
            
            console.log(out);
            
            if(votetype == 1)
				{
					 
					 $(".favour_img").show();
					 $(".voteProgressImg_favour").hide();
				}
				 else
					{
						 
						 $(".against_img").show();
						 $(".voteProgressImg_against").hide();
					}
            
            
            out = out.toString();

            var outObj = jQuery.parseJSON(out);
            
            if(outObj.flag=='vote_limit_exceeded')
            {    
			
			     if(outObj.type == 1)
				 	{
						
						if(votetype == 1)
							{
						
							 $.prompt('<span style="color:red; text-align:center;" ><img src="images/left_voteonce.png"></span>'); 
							 
							// $(".jqi").css("background","images/right_voteonce.png");
							 
							}
							 else
							     {
									  
									 $.prompt('<span style="color:red;text-align:center;" ><img src="images/right_makeup.png"></span>'); 
									  
								 }
						 
					}
					 else
					     {
							  
							  if(votetype == 0)
								{
							
								 $.prompt('<span style="color:red;text-align:center;" ><img src="images/right_voteonce.png"></span>');
								
								}
								 else
									 {
										  
										  $.prompt('<span style="color:red;text-align:center;" ><img src="images/left_makeup.png"></span>');
										  
									 }
							  
						 }
				 
                
 
                return false;
            }
            if(outObj.flag=='voting_too_early')
            {             
                                     
                $.prompt('<span style="color:red" >'+outObj.msg+'</span>');
                                                
                return false;
            }
             
            if(outObj.flag=='added')
            {
                
                 
				 if(votetype == 1)
					{
						 
						 
						 $(".favour_img").attr("src","images/you_voted_for.png");
						 
						 $.prompt('<span style="color:red;text-align:center;" ><img src="images/left_success.png"></span>');
						
					}
					 else
						{
							 
							  $(".against_img").attr("src","images/against.png");
							  
							  $.prompt('<span style="color:red;text-align:center;" ><img src="images/left_success.png"></span>');
							
						}
				 
				 var favour = outObj.favour;
				 
				 var against = outObj.against;
                 
                 chnage_with_vote(favour,against);
				 
                 //$.prompt('<span style="color:green" >'+outObj.msg+'</span>');


            }
        }
    });
}





function jsSleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}


function showSingle(photo)
{
    $('#singlePage').fadeIn();
    $("#singlePageBannerImg").attr("src","banners/texted/"+photo);    
    $("#singlePageCupImg").attr("src","cups/"+photo);
    
}



//callbacks from Facebookphotos module
function fbPhotosCallback(fullUrl,shortUrl,fileExt,fileName)
{
    $("#uploadProgress").show();
    
    img = "index.php?r=site/fbImagePreview&by_ajax=1&imageUrl="+fullUrl+"&imageName="+fileName+"&resize=130x130,308x308";
    
    
    //onfinish image loading
     var myImage = new Image();
       myImage.onload = function(){
           
           $("#photoPreview").attr("src","photos/130x130/"+fileName);
           $("#Entries_photo").val(fileName);
           $("#uploadProgress").hide();
       };
       myImage.src = img;
       
}


//hover image        
//$(document).ready(function() {
//$("img.rollover").hover(
//function() { 
//    
//    nowI = parseInt(this.alt);
//    
//    for(i=1;i<=nowI;i++)
//    {
//        //this.src = this.src.replace("_off", "_on");
//        $("img.rollover"+i).attr("src", this.src.replace("_off", "_on") );
//    }
//    
//    
//    
//},
//function() { 
//    
//    $("img.rollover").attr("src", this.src.replace("_on", "_off") );
//    
//    //this.src = this.src.replace("_on", "_off");
//    
//});
//});


function showProgress()
{
    $.blockUI();
}