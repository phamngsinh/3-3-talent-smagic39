// JavaScript Document
var mug = document.getElementById("dark");
		var canvas = document.createElement("canvas");
		var ctx = canvas.getContext("2d");
		var originalPixels = null;
		var currentPixels = null;
		
		function HexToRGB(Hex)
		{
			console.log(Hex);
			var Long = parseInt(Hex.replace(/^#/, ""), 16);
			return {
				R: (Long >>> 16) & 0xff,
				G: (Long >>> 8) & 0xff,
				B: Long & 0xff
			};
		}
		
		function changeColor(n)
		{
			if(!originalPixels) return; // Check if image has loaded
			var newColor = HexToRGB("#"+n);
			
			for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
			{
				if(currentPixels.data[I + 3] > 0)
				{
					currentPixels.data[I] = originalPixels.data[I] / 255 * newColor.R;
					currentPixels.data[I + 1] = originalPixels.data[I + 1] / 255 * newColor.G;
					currentPixels.data[I + 2] = originalPixels.data[I + 2] / 255 * newColor.B;
					
				}
			}
			
			ctx.putImageData(currentPixels, 0, 0);
			dark.src = canvas.toDataURL("image/png");
		}
		
		function changeOrignal()
		{
			if(!originalPixels) return; // Check if image has loaded
			//var newColor = HexToRGB("#"+n);
			
			for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
			{
				if(currentPixels.data[I + 3] > 0)
				{
					currentPixels.data[I] = originalPixels.data[I] ;
					currentPixels.data[I + 1] = originalPixels.data[I + 1] ;
					currentPixels.data[I + 2] = originalPixels.data[I + 2] ;
					
				}
			}
			
			ctx.putImageData(currentPixels, 0, 0);
			dark.src = canvas.toDataURL("image/png");
		}
		function getPixels(img)
		{
			
			console.log(img);
			canvas.width = img.width;
			canvas.height = img.height;
			
			ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
			originalPixels = ctx.getImageData(0, 0, img.width, img.height);
			currentPixels = ctx.getImageData(0, 0, img.width, img.height);
			
			
			
			img.onload = null;
			
			
			$("#dark").css("opacity","0.20");
			
		}

// --------- code for image contrast
