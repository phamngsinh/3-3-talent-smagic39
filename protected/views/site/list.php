
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
			 
				    
				 
				     $(".list"+id).show("slide", { direction: "right" }, 2000);
					
				     $(".left").attr("title",id);
					 
				     $(".right").attr("title",id);
					
				}
				 else if(id == 1)
				 	{
						
						if(total == 0)
							{
							
							 $(".list"+id).css("display","none");
				 
						
						 
							 id = 1;		 
						 
							 
							 //$(".list"+id).css({ "display": "block", "opacity": "0" }).animate({ "opacity": "1" }, 3000);
							 
							 $(".list"+id).show("slide", { direction: "right" }, 2000);
							 
							 
							
							}
							 else
							     {
						
									$(".list"+id).css("display","none");
									
									id = total;
									
									$(".list"+id).show("slide", { direction: "right" }, 2000);
								
									$(".left").attr("title",id);
									 
									$(".right").attr("title",id);
								
								 }
						 
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
				 	<span><?php echo count($data); ?></span>scoops
				 </div>	
				
				<div class="clear"></div>	
			</div>
			
		   <div class="friend_cnt" id="content_frd">
		   	
			<?php foreach($data as $d){ ?>
			
				<div class="frnd_step">
					<?php
					$userImgAbs = CommonMethods::fixHttp($this->fbConfigurations['home'])."".ZarrImageResizer::cache('https://graph.facebook.com/' . $d->fb_user . '/picture?type=large', 'user-150x150-' . $d->fb_user, 'jpg', '150x150');
					?>
					<div class="lft_frn"><img src="<?php echo $userImgAbs; ?>" width="87" height="88"></div>
					
					<div class="middle_frd">
					
					<p class="frd_head"><?php echo CHtml::decode($d->user->name); ?> <span>has sent you a </span><?php echo $d->flavour->flavout_title; ?></p>
					
					<p class="frnd_simple"><span><img src="images/cots_start.png"></span><span class="rgt"><img src="images/cots_end.png"></span></p>
					<p class="frnd_simple mr_ddl_lft"><?php echo CHtml::decode($d->details); ?></p>
					
					</div>
					
					<div class="rgt_frd"><img src="admin/uploads/188x200/<?php echo $d->flavour->pic; ?>" width="115" height="93"></div>
					
					<div class="clear"></div>
				</div>
				
				<div class="line"><img src="images/fr_line.png"></div>
				
				
			<?php } ?>
				
				<div class="clear"></div>
		   </div>
		    
			
		
		<div class="clear"></div>
	</div>

	    <div id="wrapper_dcollection">
			
			<div class="header">
				
				<div class="left">
						
						<img  onclick="first_popup('wrapper_dcollection','wrapper_form')" src="images/send_to_frd_up.png"><br />
                        
                        <a href="#"><img src="images/send_to_frd_btm.png"></a>
						
				</div>
				
				<div class="right">
						
						<img src="images/store_up.png" onclick="first_popup('wrapper_dcollection','wrapper_store')"><br />
						
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
				
				<div class="dcollection_heading">
				
				<?php 
					if($category[0]->icecream_category_id == 1)
						{
				?>
						 <img class="grand" src="images/grand_icecream.png">
				<?php 
						}
						 elseif($category[0]->icecream_category_id == 2)
						 	{
				?>
							 <img src="images/dcollection_heading.png">
				<?php
							}
				?>
				
				</div>
				
				<div class="dcollection_text grand_text">
						<p>
							<?php echo CHtml::decode($category[0]->description); ?>
						</p>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="slider_wrap">
			
				<div class="grand_btm_slider" style="overflow:hidden;">
					
					<?php $count = count($flavours);
						  $divide = intval($count/3);
					 ?>
					
					<div class="slider_left">
							<img title="1" src="images/slider_left.png" onclick="slide_previous(this.title,<?php echo $divide; ?>)" class="left">
					</div>
					
					<div class="slider_middle">
					
					<?php 
					    
						 $i = 1;
						 $j = 1;
						 foreach($flavours as $ice)
						 	{
							
							if($i == 1)
								{
					?>
								  <ul class="list1">
					<?php
								}
					?>
						
							
								<li><a href="index.php?r=site/indivual&id=<?php echo $ice->flavour_id; ?>"><img src="admin/uploads/188x200/<?php echo $ice->pic; ?>" width="188" height="216"></a></li>
									
							
					
					<?php 
					      
						  
						    if($i%3 == 0)
								{
								 $j++;
					?>
								  </ul>
								  <ul class="list<?php echo $j; ?>"  style="display:none;">
								  
					<?php
								}
					
							$i++;
							}
					
					?>
							
							
							
					</div>
					
					<div class="slider_right">
							<img title="1" onclick="slide_next(this.title,<?php echo $divide; ?>)" class="right" src="images/slider_right.png">
					</div>
				 </div>
				 
				<div class="clear"></div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	<div id="wrapper_store" style="display:block;">
			
			<div class="header_top">
				<img src="images/cross.png" onclick="store_close('wrapper_dcollection','wrapper_store')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<p>Select an area</p>
					<div class="select" style="margin-left:-10px !important;">
						<select name="area" onchange="get_area(this.value)">
						    <option value="">All</option>
							<?php
							
								foreach($area_data as $area)
									{
								
							?>
									<option value="<?php echo $area['area_id'] ?>"><?php echo $area['area_title'] ?></option>
								
							<?php
								   }
							?>
						</select>
					</div>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<p>Search by Zipcode</p>
					<div class="select">
						<input type="text" name="saerch" value="" onchange="zipcode(this.value)">
					</div>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="store_content" id="content">
			 
			 <?php 
			 $d_i = 1;
			 	foreach($areadetail_data as $detail)
					{
					 $s = '';
					if($d_i%2 == 0)
						{
						 
						 $s = 'store_box_margin';
						 
						}
						 else
						     {
							  
							  echo '<div class="store_step">';
							  
							 }
					
			 ?>
			 		 
				
						<div class="store_box <?php echo $s; ?>">
							
							<div class="lft_img">
								<img src="images/locator_ice.png">
							</div>
							
							<div class="rgt_txt">
								<p class="head_txt"><?php echo $detail['area_detail_title']; ?></p>
								<p class="simple_text"><?php echo $detail['block']; ?></p>
								<p class="simple_text"><?php echo $detail['address']; ?></p>
								<p class="simple_text"><?php echo $detail['phone']; ?></p>
								<p class="simple_text"><?php echo $detail['zip_code']; ?> </p>
								
							</div>
							
						</div>
				
				<?php 
					if($d_i%2 == 0)
						{?>
						<div class="clear"></div>
				</div>
				<?php		}
				?>
					
					
			 <?php
			  $d_i++;
			 		}
			 ?>
				
				
				
				<div class="clear"></div>
			</div>
			
		<div class="clear"></div>
	</div>
	<script>
	function get_area(val)	
		{
		 $.blockUI();
		 $(".store_content").css("opacity",0.4);
		 $.ajax({
			  url: 'index.php?r=site/loadarea&id='+val,
			  success: function(data) {
				$('.store_content').html(data);
				//alert('Load was performed.');
				$.unblockUI();
				$(".store_content").css("opacity",1);
				return false;
			  }
			});
		 
		}
	
	function zipcode(val)	
		{
		 $.blockUI();
		 $(".store_content").css("opacity",0.4);
		 $.ajax({
			  url: 'index.php?r=site/zipcode&code='+val,
			  success: function(data) {
				$('.store_content').html(data);
				//alert('Load was performed.');
				$.unblockUI();
				$(".store_content").css("opacity",1);
				return false;
			  }
			});
		 
		}
	</script>