<script>

function store_open()
	{
	 
	 $("#wrapper").css("display","none");
	 $("#wrapper_store").fadeIn(2000);
	 
	}

function store_close()
	{
	
	  $("#wrapper_store").css("display","none");
	  $("#wrapper").fadeIn(2000);
	 
	}

function friend_open()
	{
	 
	 $("#wrapper").css("display","none");
	 $("#wrapper_form").fadeIn(2000);
	 
	}

function friend_close()
	{
	
	  $("#wrapper_form").css("display","none");
	  $("#wrapper").fadeIn(2000);
	 
	}

</script>
<style type="text/css">
	<!--
		#content{ height: 455px;
    overflow: auto;
	padding-top:20px;    
    width: 665px;
} 
		#content p:nth-child(even){}
		#content p:nth-child(3n+0){}
		.mCSB_buttonUp{ display:none !important;}
		.mCSB_scrollTools{ margin-top:5px;}
	-->
	</style>
	
<style type="text/css">
	<!--
		#content_frd{ height: 320px;
    overflow: auto;
	padding-top:20px;    
    width: 670px;
} 
		#content_frd p:nth-child(even){}
		#content_frd p:nth-child(3n+0){}
		.mCSB_buttonUp{ display:none !important;}
		.mCSB_scrollTools{ margin-top:5px;}
	-->
	</style>
	<div id="wrapper">
			
			<div class="header">
				
				<div class="left">
						
						<a href="#"><img src="images/send_to_frd_up.png"></a><br />
                        
                        <a href="#"><img src="images/send_to_frd_btm.png"></a>
						
				</div>
				
				<div class="right">
						
						<a href="#"><img src="images/store_up.png"></a><br />
						
                        <a href="#"><img src="images/store_btm.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="header_btm">
			
			   <div class="grand_head">	
				<a href="#"><img src="images/grand.png"></a>
			   </div>
			   <div class="d_collection_head">
				<a href="#"><img src="images/d_collection.png"></a>
			   </div>
			   
				<div class="clear"></div>
			</div>
			
			<div class="btns_grand_collection">
				
				<div class="left_btns">
					<a href="#"><img src="images/grand_btn.png"></a>
				</div>
				
				<div class="right_btns">
					<a href="#"><img src="images/collection.png"></a>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="flavour_virtual">
				
				<div class="flavour">
					<img src="images/flavour.png" onclick="store_open()">
				</div>
				
				<div class="virtual">
					<img src="images/virtual.png" onclick="friend_open()" style="cursor:pointer;">
				</div>
				
				<div class="clear"></div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	
	
	<div id="wrapper_store" style="display:none;">
			
			<div class="header_top">
				<img src="images/cross.png" onclick="store_close()">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<p>Select an area</p>
					<div class="select" style="margin-left:-20px;">
						<select name="area">
								<option value="All">All</option>
						</select>
					</div>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<p>Search by Zipcode</p>
					<div class="select">
						<input type="text" name="saerch" value="">
					</div>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="store_content" id="content">
				
				<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
					<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
					<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
					<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
				
					<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
				
					<div class="store_step">
				
					<div class="store_box">
						
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					<div class="store_box store_box_margin">
					
						<div class="lft_img">
							<img src="images/locator_ice.png">
						</div>
						
						<div class="rgt_txt">
							<p class="head_txt">Courts (Ang Mo Kio Ave 6)</p>
							<p class="simple_text">Block 730 </p>
							<p class="simple_text">Ang Mo Kio Ave 6 </p>
							<p class="simple_text">#01-4272 </p>
							<p class="simple_text">560730 </p>
							
						</div>
						
					</div>
					
					<div class="clear"></div>
				</div>
				
				<!--  store step-->
				
				<div class="clear"></div>
			</div>
			
			
			
		
		<div class="clear"></div>
	</div>
	
	<div id="wrapper_form" style="display:none;">
			
			<div class="header_top">
				<img src="images/cross.png" onclick="friend_close()">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<a href="#"><img src="images/inbox.png"></a>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<a href="#"><img src="images/send.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="board">
				
				 <div class="board_text">
				 	<span>17</span>scoops
				 </div>	
				
				<div class="clear"></div>	
			</div>
			
		   <div class="friend_cnt" id="content_frd">
		   		
				<div class="frnd_step">
					
					<div class="lft_frn"><img src="images/man.png"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head">Alex Motrenko <span>has sent you a </span>Rocky Road</p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span>Hey there buddy,<span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft">Hope all is well. Have some Rocky Road on me. Brings back some good old memories, doesn’t it? Cheers!</p>
					
					</div>
					
					<div class="rgt_frd"><img src="images/friend_box_one.png"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				<div class="frnd_step">
					
					<div class="lft_frn"><img src="images/man.png"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head">Alex Motrenko <span>has sent you a </span>Rocky Road</p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span>Hey there buddy,<span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft">Hope all is well. Have some Rocky Road on me. Brings back some good old memories, doesn’t it? Cheers!</p>
					
					</div>
					
					<div class="rgt_frd"><img src="images/friend_box_one.png"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				<div class="frnd_step">
					
					<div class="lft_frn"><img src="images/man.png"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head">Alex Motrenko <span>has sent you a </span>Rocky Road</p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span>Hey there buddy,<span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft">Hope all is well. Have some Rocky Road on me. Brings back some good old memories, doesn’t it? Cheers!</p>
					
					</div>
					
					<div class="rgt_frd"><img src="images/friend_box_one.png"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				<div class="frnd_step">
					
					<div class="lft_frn"><img src="images/man.png"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head">Alex Motrenko <span>has sent you a </span>Rocky Road</p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span>Hey there buddy,<span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft">Hope all is well. Have some Rocky Road on me. Brings back some good old memories, doesn’t it? Cheers!</p>
					
					</div>
					
					<div class="rgt_frd"><img src="images/friend_box_one.png"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				<div class="frnd_step">
					
					<div class="lft_frn"><img src="images/man.png"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head">Alex Motrenko <span>has sent you a </span>Rocky Road</p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span>Hey there buddy,<span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft">Hope all is well. Have some Rocky Road on me. Brings back some good old memories, doesn’t it? Cheers!</p>
					
					</div>
					
					<div class="rgt_frd"><img src="images/friend_box_one.png"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				
				<div class="clear"></div>
		   </div>
		    
			
		
		<div class="clear"></div>
	</div>
	
	 <!-- wrapper closed -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
	<!-- mousewheel plugin -->
	<script src="scroller/jquery.mousewheel.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script src="scroller/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".store_content").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
	
	 <!-- wrapper closed -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
	<!-- mousewheel plugin -->
	<script src="scroller/jquery.mousewheel.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script src="scroller/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".friend_cnt").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>