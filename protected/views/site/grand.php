
<script>
function slide_next(id,total)
			{
			 
			 console.log(id);
			 
			 id = parseInt(id);
			 
			 total = total-1;
			 
		
			 
			 if(id <=total)
			 	{
			     
				 
				
				$(".list"+id).css("display","none");
				 
				
				 
				 id = id+1;			 
			 
			     
				 
				 $(".list"+id).show("slide", { direction: "left" }, 2000);
				 
				 $(".left").attr("title",id);
				 
				 $(".right").attr("title",id);
				
				}
				 else if(id > total)
				 	{
						
						
						
						$(".list"+id).css("display","none");
				 
						
						 
						 id = 1;		 
					 
						 
						 //$(".list"+id).css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);
						 
						 $(".list"+id).show("slide", { direction: "left" }, 2000);
						 
						 $(".left").attr("title",id);
						 
						 $(".right").attr("title",id);
						
					}
			 
				 
				
			 
			 
			}
		
		function slide_previous(id,total)
			{
			 
			 console.log(id);
			 
			 id = parseInt(id);
			 
			 
			 console.log(total);
			 
			 if(id > 1)
			 	{
			 
					
					 
					 $(".list"+id).css("display","none");
					 
					
					 
					 id = id-1;
			 
				    
				 
				     $(".list"+id).show("slide", { direction: "left" }, 2000);
					
				    $(".left").attr("title",id);
					 
				    $(".right").attr("title",id);
					
				}
				 else if(id == 1)
				 	{
						 
						$(".list"+id).css("display","none");
						
						id = total;
						
						$(".list"+id).show("slide", { direction: "left" }, 2000);
					
						$(".left").attr("title",id);
						 
						$(".right").attr("title",id);
						 
					}
					
			 
			  
			 
			}
</script>

<script>
	
	function first_popup(id_one,id_two)
		{
		 
		 $("#"+id_one).css("opacity",0.4);
		 $("#"+id_two).css("display","block");
		 
		}
	
	 function store_close(id_one,id_two)
	 	{
		 
		 $("#"+id_one).css("opacity",1);
		 $("#"+id_two).css("display","none");
		 
		}
	
</script>

		<div id="wrapper_store" style="display:block;">
			
			<div class="header_top">
				<img src="images/cross.png" onclick="store_close('wrapper_dcollection','wrapper_store')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<p>Select an area</p>
					<div class="select" style="margin-left:-10px !important;">
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
	    <div id="wrapper_form" style="display:block;">
			
			<div class="header_top">
				<img src="images/cross.png" onclick="store_close('wrapper_dcollection','wrapper_form')">
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
	    <div id="wrapper_dcollection">
			
			<div class="header">
				
				<div class="left">
						
						<img onclick="first_popup('wrapper_dcollection','wrapper_store')" src="images/send_to_frd_up.png"><br />
                        
                        <a href="#"><img src="images/send_to_frd_btm.png"></a>
						
				</div>
				
				<div class="right">
						
						<img onclick="first_popup('wrapper_dcollection','wrapper_form')" src="images/store_up.png"><br />
						
                        <a href="#"><img src="images/store_btm.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="header_btm">
			
			   <div class="grand_head">	
				<a href="index.php?r=site/list&type=grand"><img src="images/grand.png"></a>
			   </div>
			   <div class="d_collection_head">
				<a href="index.php?r=site/list&type=d"><img src="images/d_collection.png"></a>
			   </div>
			   
				<div class="clear"></div>
			</div>
			
			
			<div class="dcollection_content">
				
				<div class="dcollection_heading"><img class="grand" src="images/grand_icecream.png"></div>
				
				<div class="dcollection_text grand_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="slider_wrap">
			
				<div class="grand_btm_slider" style="overflow:hidden;">
					
					<div class="slider_left">
							<img title="1" src="images/slider_left.png" onclick="slide_previous(this.title,2)" class="left">
					</div>
					
					<div class="slider_middle">
							
							<ul class="list1">
								<li><a href="index.php?r=site/indivual"><img src="images/grand_one.png"></a></li>
								<li><a href="index.php?r=site/indivual"><img src="images/grand_two.png"></a></li>
								<li><a href="index.php?r=site/indivual"><img src="images/grand_three.png"></a></li>
							</ul>
							
							<ul class="list2"  style="display:none;">
								<li><a href="index.php?r=site/indivual"><img src="images/grand_one.png"></a></li>
								<li><a href="index.php?r=site/indivual"><img src="images/grand_two.png"></a></li>
								<li><a href="index.php?r=site/indivual"><img src="images/grand_three.png"></a></li>
							</ul>
							
					</div>
					
					<div class="slider_right">
							<img title="1" onclick="slide_next(this.title,2)" class="right" src="images/slider_right.png">
					</div>
				 </div>
				 
				<div class="clear"></div>
			</div>
			
		
		<div class="clear"></div>
	</div>