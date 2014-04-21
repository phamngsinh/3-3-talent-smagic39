function convertImageToCanvas(image) {
	var canvas = document.createElement("canvas");
	canvas.width = image.width;
	canvas.height = image.height;
	canvas.id = image.id;
	canvas.style = image.style;
	canvas.onload = image.onload;
	canvas.getContext("2d").drawImage(image, 0, 0);

	return canvas;
}

function save()
	{
		 
		 // save canvas image as data url (png format by default)
		 var dataURL = canvas.toDataURL();
		
		 // set canvasImg image src to dataURL
		 // so it can be saved as an image
		 var imhh = document.getElementById("dark").src = dataURL;
		 
		 console.log(imhh);
		 
		 var canvasData = imhh;
		 
		 var ajax = new XMLHttpRequest();
		
		 ajax.open("POST",'testSave.php',false);
		
		 ajax.setRequestHeader('Content-Type', 'application/upload');
		
		 ajax.send(canvasData ); 
		 
	}

function foam()
	{
		 
		 $('#foam').slider({
				min: 20,
				max: 95,
				step: 1,
				orientation: "vertical",
				slide: function(event, ui) {
					
					var foam = ui.value;
					
					     if(foam <= 9)
						     {
							  
							  foam = "0.0"+foam;
							  
							 }
							  else
								  {
								  
								   foam = "0."+foam+"0";
								  
								  }
					
					console.log(foam);
					
					
					$("#dark").css("display","block");
					$("#dark").css("opacity",foam+"0");
					
					
				
				}
		});
		 
	}

// zoom inout
function zoominout()
	{
		 
		 $('#sliderbottle').slider({
						min: 250,
						max: 500,
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
				min: 0,
				max: 0.6,
				step: 0.1,
				orientation: "vertical",
				slide: function(event, ui) {
				$("#dark").css("display","block");	
					//var val = 60 - ui.value;
					
					var val = ui.value;
					
					co_last = val;
					
					//$("#white").css("opacity",val);
					
					if(val > co_last)
						{
					
						Pixastic.process(document.getElementById("dark"), "brightness", {
							contrast : val
						});
					    
						}
						 else
						      {
					
								Pixastic.revert(document.getElementById("dark"), "brightness", {
									contrast : white
								});
								
								
								Pixastic.process(document.getElementById("dark"), "brightness", {
									contrast : val
								});
							  }
					//if(val ==60)
//					{
//					  
//					  changeOrignal();
//						
//					}
//					else
//					{
//						console.log(val);
//					
//						var n = allcolor[val];
//					
//						changeColor(n);
//					}
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
				
						Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
				   Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			});
				   }
				    else
					     {
						  
						  Pixastic.revert(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
					      
						  Pixastic.process(document.getElementById("user_image"), "brightness", {
						contrast : white
					});
						  Pixastic.process(document.getElementById("user_image"), "sepia", {
				contrast : 15
			});
						  
						 }
					
					last = white;
					
					console.log(document.getElementById("user_image"));
					
					console.log(white);
					
					///$("#white").css("opacity",white+"0");
					$(document).ready(function(){
  $("#user_image").draggable();
});
					
				}
				
		});
	}