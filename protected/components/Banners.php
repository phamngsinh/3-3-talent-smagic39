<?php


/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Banners extends CController
{
    protected $banner;
    protected $friends = array();
    protected $saveAs;

    function __construct($banner,$friends,$fileName)
    {
	$this->banner = $banner;
	$this->friends = explode(",",$friends);
	$this->saveAs = $fileName;
	
    }

    
    
    
    function render()
    {
	
	//angle, x, y
	
	$data['v1'][] = array(-11,20,15);		
	$data['v1'][] = array(3,177,125);	  
	$data['v1'][] = array(-11,357,21);
	$data['v1'][] = array(4,717,72);
	
	
	$data['v2'][] = array(-15,113,97);		
	$data['v2'][] = array(-15,721,60);	  
	$data['v2'][] = array(21,701,185);

	
	
	$data['v3'][] = array(16,156,77);		
	$data['v3'][] = array(-11,358,14);	  
	$data['v3'][] = array(16,569,94);
	$data['v3'][] = array(-12,708,39);
	
	$data['v4'][] = array(10,45,60);		
	$data['v4'][] = array(-9,218,188);	  
	$data['v4'][] = array(21,522,171);
	$data['v4'][] = array(-15,576,43);
	
	
	$data['val'][] = array(10,28,9);		
	$data['val'][] = array(-9,155,69);	  
	$data['val'][] = array(11,524,11);
	$data['val'][] = array(14,689,138);
	
	$data['cnvy'][] = array(16,196,9);		
	$data['cnvy'][] = array(-12,388,7);	  
	$data['cnvy'][] = array(1,540,97);
	$data['cnvy'][] = array(14,700,23);
	
	$data['v1g'][] = array(10,93,58);		
	$data['v1g'][] = array(-15,225,16);	  
	$data['v1g'][] = array(7,568,80);
	$data['v1g'][] = array(9,698,132);
	
	$data['v2g'][] = array(11,92,85);		
	$data['v2g'][] = array(-9,231,22);	  
	$data['v2g'][] = array(29,546,8);
	$data['v2g'][] = array(4,663,166);
	
	
	$data['v3g'][] = array(16,24,26);		
	$data['v3g'][] = array(-9,165,62);	  
	$data['v3g'][] = array(-11,540,92);
	$data['v3g'][] = array(4,694,43);
	
	
	$data['xmasCLO'][] = array(-4,3,94);		
	$data['xmasCLO'][] = array(6,68,-5);	  
	$data['xmasCLO'][] = array(-13,506,0);
	$data['xmasCLO'][] = array(8,620,5);
		
	$data['xmasCF'][] = array(-23,54,-3);		
	$data['xmasCF'][] = array(26,162,138);	  
	$data['xmasCF'][] = array(6,526,53);
	$data['xmasCF'][] = array(-18,584,160);
		
		
	
	
	
	
	$i = 0;
	foreach ($this->friends as $userId)
	{
	    if($userId != '')
	    {
		if(isset($data[$this->banner][$i]))
		{
		    $subData = $data[$this->banner][$i];	    	    
		    $this->renderNow(trim($userId),$subData[0],$subData[1],$subData[2]);
		    $i++;
		}
	    }
	}	
	

	$thumb = PhpThumbFactory::create("banners/".$this->saveAs);
	$thumb->show();
	
	
    }
    
    
    function renderNow($userId,$angle,$x,$y)
    {
	
	
	$frameW = 115;
	$frameH = 124;
		
	$imgW = 94;
	$imgH = 88;
	
	
	
	
	//save file if not exists
	if(!is_file("uploads/cache/{$imgW}x{$imgH}-".$userId.".png"))
	{
	    $thumb = PhpThumbFactory::create('https://graph.facebook.com/'.$userId.'/picture?type=large');
	    $thumb->adaptiveResize($imgW, $imgH)->save("uploads/cache/{$imgW}x{$imgH}-".$userId.".png","png");
	}
	
	//rotate and save if not exists
	if(!is_file("uploads/cache/rotated/{$userId}_{$angle}.png"))
	{
	    $thumb = PhpThumbFactory::create("images/banners/polaride.png");
	    
	    //$thumb = PhpThumbFactory::create("uploads/cache/{$imgW}x{$imgH}-".$userId.".png");
	   
	    $thumb->createWatermark("uploads/cache/{$imgW}x{$imgH}-".$userId.".png",11,8);
	    
	    $thumb->rotate(-$angle)->save("uploads/cache/rotated/{$userId}_{$angle}.png","png");
	}
	

	
	if(!is_file("banners/".$this->saveAs))
	{
	    $thumb = PhpThumbFactory::create('images/banners/'.$this->banner.".png"); //_demo
	}
	else
	{
	    $thumb = PhpThumbFactory::create("banners/".$this->saveAs);
	}
	
	
	
	//add watermark		
	$thumb->createWatermark("uploads/cache/rotated/{$userId}_{$angle}.png",$x,$y);
	
	
	$thumb->save("banners/".$this->saveAs);		

    }
    
    
    public function addText($text)
    {
	$thumb=new Watermarker("banners/".$this->saveAs);
	
	//font, color, size, $x, $y, $wordwrap
	
	//cols = 32
	//rows = 5
	
	$data['val'] = array("Helvetica.otf","ffffff",13,294,145,32); //
	
	$data['v1'] = array("MyriadPro-Regular.otf","4a2644",15,502,116,30); //5,32
	
	$data['v2'] = array("MyriadPro-Regular.otf","653600",15,388,156,32); //5,32
	
	$data['v3'] = array("Helvetica.otf","008ab0",15,343,182,32); //5,32
	
	
	$data['v4'] = array("Helvetica.otf","4a2644",15,243,32,32); //5,32
	
	
	$data['v1g'] = array("MyriadPro-Regular.otf","008ab0",15,325,160,32); //5,32
	
	$data['v2g'] = array("MyriadPro-Regular.otf","981a54",15,360,166,32); //5,32
	
	$data['v3g'] = array("MyriadPro-Regular.otf","a83f17",15,320,146,32); //5,32
	
	$data['cnvy'] = array("Helvetica.otf","ffffff",15,280,168,32); //5,32
	
	$data['val'] = array("Helvetica.otf","ffffff",15,295,140,32); //5,32
	
	
	$data['xmasCF'] = array("Helvetica.otf","231f20",10,253,26,20); //5,32
	
	$data['xmasCLO'] = array("Helvetica.otf","231f20",10,530,158,20); //5,32
	
	
	
	
	//$text = "hihow r u?s fsd sdf ssd sdf sd dsfs dfs fsdfs fsdflkjslkfja ldj alkdja lkdjaldsj lajdlkjs fsdf sdlfkjs lfksjfsd fslkdfj slkfj sdlfkjs lkfjslkfjslks.";
	
	$text = wordwrap($text, $data[$this->banner][5], "\n", true);
	
	$thumb->txt_watermark=$text;	    // [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
	
	$thumb->txt_watermark_font_style = "fonts/".$data[$this->banner][0];
	
	$thumb->txt_watermark_color=$data[$this->banner][1];	    // [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
	$thumb->txt_watermark_font_size=$data[$this->banner][2];	            // [OPTIONAL] set watermark text font: 1,2,3,4,5

	
	$thumb->txt_watermark_Vmargin=$data[$this->banner][3];   
	$thumb->txt_watermark_Hmargin=$data[$this->banner][4];          // [OPTIONAL] set watermark text horizonatal margin in pixels
	
	
	$thumb->process();
	
	$thumb->save("banners/texted/".$this->saveAs);
	
	$thumb->show();
    }
    
    
    
    
}