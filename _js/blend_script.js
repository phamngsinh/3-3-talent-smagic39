function convertCanvasToImage(canvas)
{
		var image = new Image();
		image.src = canvas.toDataURL("image/png");
		
		return image;
}
 

function draw(x,y) 
{        $.blockUI();
    
          
    
    
          var canvas = document.getElementById("MyCanvas");

          if (canvas.getContext) {
              // Get the context.
           	  var ctx = canvas.getContext("2d"); 	
			
			
		   	  var user = document.getElementById("user_image");
		    
			  var previmage = convertCanvasToImage(user);
			  
			  var prev = previmage;
			  
			  //console.log(previmage);
              
			  var wh = $('#sliderbottle').slider("option", "value");
			  
			  if(wh == 0)
			  {
					 
					 wh = 191;
					 
			  }
			  canvas.width = wh;
			  canvas.height = wh;
			  //console.log(ctx);
			  
			  previmage.onload = function() {
			  
			  ctx.drawImage(previmage, 0, 0,wh,wh);
			  
			  sleep(2000);
			  
			  var data = ctx.getImageData(x, y, 190, 190);
			  
			  //console.log(data);
	         
			  ctx.clearRect(0, 0, canvas.width, canvas.height);
			  
			  canvas.width = 190;
			  canvas.height = 190;
			  
                            ctx.putImageData(data, 0, 0);
			  
			  //console.log(ctx);
			  
			  newimagetwo = convertCanvasToImage(canvas);
			  
			  newimagetwo.onload = function() {
			
			  var foam = document.getElementById("dark");
			  var val = $('#foam').slider("option", "value");
					 
			  var foamimage = convertCanvasToImage(foam);
			 
			  //console.log(val);
			  ctx.globalAlpha = val;
			  
			  foamimage.onload = function() {
			  
			 
			  
			  ctx.drawImage(foamimage, 0, 0,190,190);
			  sleep(3000);
			  
			  var image = document.getElementById("white");
			  
			  
			  var val = $('#coffee').slider("option", "value");
			  ctx.globalAlpha = val;
			  ctx.drawImage(image, 0, 0,190,190);
			  
			  // to save image
			     var canvasData = MyCanvas.toDataURL("image/png");
			 
				 var ajax = new XMLHttpRequest();
				
				 //ajax.open("POST",'testSave.php',false);
                                 
                                 ajax.open("POST",'index.php?r=site/SaveCanvasImage&by_ajax=1',false);
                                                                  
				
				 ajax.setRequestHeader('Content-Type', 'application/upload');
				
				 ajax.send(canvasData); 
				 
				 var out = ajax.response;
		
				 //console.log(out);
				 
                                
                                 
       
                                 
				if(out != 'no')
                                {

                                         //$("#MyCanvas").css("display","block");
                                         $.unblockUI();

                                         document.location = "index.php?r=site/coverPhoto&signed_request="+$("#signed_request_holder").val()+"&fileName="+out;
                                }
				 
			  // save image end
			  
			  };
			  };
			  
			  
			  };
			  
			  
			 /*foamimage.onload = function() {
			  foamimagetwo = convertCanvasToImage(canvas);
			  //console.log('foam');
			  //console.log(foamimagetwo);
			 
			 };*/
			 
			  
			  
			 /* foamimagetwo.onload = function() {
			    ctx.clearRect(0, 0, canvas.width, canvas.height);
			    canvas.width = 190;
			    canvas.height = 190;
			    ctx.globalAlpha = 1;
			  ctx.drawImage(newimagetwo, 0, 0);
			  ctx.drawImage(foamimagetwo, 0, 0);
			  
			  };*/
			  
          }
          
      }

function save()
	{
		
		$("#MyCanvas").css("display","none");
		var top = $("#user_image").css("top");
		
		var left = $("#user_image").css("left");
		
		top = top.replace("px","");
		
		top = parseInt(top);
		
		left = left.replace("px","");
		
		left = parseInt(left);
		
		top = top - 58;
		
		left = left - 84;
		
		if(top < 0)
			{
				 
				 top = Math.abs(top);
				 
			}
		
		if(left < 0)
			{
				 
				 left = Math.abs(left);
				 
			}
		
		
		if(left == 0)
			{
			  
			  left = 1;
			  
			}
		
		if(top == 0)
			{
			
			  top = 1;
			 
			}
		// sleep(2000);
		 
		 
		 
		 
		 draw(left,top);
		 
									
		 
		
			
		
		 
	}


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}


function foam()
	{
		 
		 $('#foam').slider({
				min: 0.20,
				max: 0.95,
				step: 0.1,
				orientation: "vertical",
				slide: function(event, ui) {
					
					var foam = ui.value;
					
					
					//console.log(foam);
					
					
					$("#dark").css("display","block");
					$("#dark").css("opacity",foam+"0");
					
					
				
				}
		});
		 
	}

function foam_change()
	{
		 
		 $('#foam').slider({
				min: 0.20,
				max: 0.95,
				step: 0.1,
				orientation: "vertical",
				change: function(event, ui) {
					
					var foam = ui.value;
					
					
					//console.log(foam);
					
					
					$("#dark").css("display","block");
					$("#dark").css("opacity",foam+"0");
					
					
				
				}
		});
		 
	}


// zoom inout
function zoominout()
	{
		 
		 $('#sliderbottle').slider({
						min: 190,
						max: 400,
						step: 1,
						orientation: "vertical",
						slide: function(event, ui) {
							
							$("#user_image").width(ui.value);
							$("#user_image").height(ui.value);
						
							
						}
				});
		 
	}

function zoominout_change()
	{
		 
		 $('#sliderbottle').slider({
						min: 190,
						max: 400,
						step: 1,
						orientation: "vertical",
						change: function(event, ui) {
							
							$("#user_image").width(ui.value);
							$("#user_image").height(ui.value);
						
							
						}
				});
		 
	}

// coffee
function coffee()
	{
		 
		 $('#coffee').slider({
				min: 0.2,
				max: 0.7,
				step: 0.1,
				orientation: "vertical",
				slide: function(event, ui) {
				$("#dark").css("display","block");	
				    //var val = 60 - ui.value;
					
					var val = ui.value;
					
					//console.log(val);
					
					$("#white").css("opacity",val);
					
					/*if(val > co_last)
						{
					    
						Pixastic.revert(document.getElementById("dark"), "brightness", {
									contrast : val
								});
								
								var v = $("#foam").slider("option", "value");
								
								
								
								$("#dark").css("opacity",v);
						
						Pixastic.process(document.getElementById("dark"), "brightness", {
							contrast : val
						});
					    
						}
						 else
						      {
					
								Pixastic.revert(document.getElementById("dark"), "brightness", {
									contrast : val
								});
								
								var v = $("#foam").slider("option", "value");
								
								
								
								$("#dark").css("opacity",v);
								
								Pixastic.process(document.getElementById("dark"), "brightness", {
									contrast : val
								});
							  }
							  co_last = val;*/
					
				}
		});
		 
	}
function coffee_change()
	{
		 
		 $('#coffee').slider({
				min: 0.2,
				max: 0.7,
				step: 0.1,
				orientation: "vertical",
				change: function(event, ui) {
				$("#dark").css("display","block");	
					//var val = 60 - ui.value;
					
					var val = ui.value;
					
					//console.log(val);
					
					$("#white").css("opacity",val);
					
					/*if(val > co_last)
						{
					     
						Pixastic.process(document.getElementById("dark"), "brightness", {
							contrast : val
						});
					    
						}
						 else
						      {
					
								Pixastic.revert(document.getElementById("dark"), "brightness", {
									contrast : val
								});
								
								var v = $("#foam").slider("option", "value");
								
								
								
								$("#dark").css("opacity",v);
								
								Pixastic.process(document.getElementById("dark"), "brightness", {
									contrast : val
								});
							  }
							  co_last = val;*/
					
				}
		});
		 
	}


// brightness
function bright()
	{
		 
		 $('#bright').slider({
				min: 0.1,
				max: 10,
				step: 1,
				orientation: "vertical",
				slide: function(event, ui) {
						
				var white = ui.value;
				
				if(white > last)
					{
				        
						 var top = $("#user_image").css("top");
		
						  var left = $("#user_image").css("left");
						
						Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
				   Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			});
				           
						 
						  var wh = $('#sliderbottle').slider("option", "value");
						  if(wh == 0)
						   	{
								 
								 wh = 190;
								 
							}
						  $("#user_image").width(wh);
						  $("#user_image").height(wh);
						  
						  
						  $("#user_image").css("top",top);
						  $("#user_image").css("left",left);
					
				   }
				    else
					     {
							 
						 var top = $("#user_image").css("top");
		
						  var left = $("#user_image").css("left");
						  
						  Pixastic.revert(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
					     
						  
						  Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
						  Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			}); 
						  
						   var wh = $('#sliderbottle').slider("option", "value");
						   
						   if(wh == 0)
						   	{
								 
								 wh = 190;
								 
							}
						   
						  $("#user_image").width(wh);
						  $("#user_image").height(wh);
						  
						  
						  $("#user_image").css("top",top);
						  $("#user_image").css("left",left);
						  
						 }
					
					last = white;
					
					//console.log(document.getElementById("user_image"));
					
					//console.log(white);
					
					///$("#white").css("opacity",white+"0");
					$(document).ready(function(){
  $("#user_image").draggable();
});
					
				}
				
		});
	}

function bright_change()
	{
		 
		 $('#bright').slider({
				min: 1,
				max: 10,
				step: 1,
				orientation: "vertical",
				change: function(event, ui) {
						
				var white = ui.value;
				
				
				if(white > last)
					{
				        
						 var top = $("#user_image").css("top");
		
						  var left = $("#user_image").css("left");
						
						Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
				   Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			});
				           
						 
						  var wh = $('#sliderbottle').slider("option", "value");
						  if(wh == 0)
						   	{
								 
								 wh = 190;
								 
							}
						  $("#user_image").width(wh);
						  $("#user_image").height(wh);
						  
						  
						  $("#user_image").css("top",top);
						  $("#user_image").css("left",left);
					
				   }
				    else
					     {
							 
						 var top = $("#user_image").css("top");
		
						  var left = $("#user_image").css("left");
						  
						  Pixastic.revert(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
					     
						  
						  Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
						  Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			}); 
						  
						   var wh = $('#sliderbottle').slider("option", "value");
						   if(wh == 0)
						   	{
								 
								 wh = 190;
								 
							}
						  $("#user_image").width(wh);
						  $("#user_image").height(wh);
						  
						  
						  $("#user_image").css("top",top);
						  $("#user_image").css("left",left);
						  
						 }
					
					last = white;
					
					//console.log(document.getElementById("user_image"));
					
					//console.log(white);
					
					///$("#white").css("opacity",white+"0");
					$(document).ready(function(){
  $("#user_image").draggable();
});
					
				}
				
		});
	}