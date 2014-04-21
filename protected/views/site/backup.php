<?php
//$_REQUEST['signed_request'];
//exit();
?>
<!-- friend selector -->
<link type="text/css" href="vendors/friend-selector/friend-selector/jquery.friend.selector-1.2.css" rel="stylesheet" />

<script type="text/javascript" src="vendors/friend-selector/friend-selector/jquery.friend.selector-1.2.js"></script>

<?php

//$userImgAbs = CommonMethods::fixHttp($this->fbConfigurations['home'])."".ZarrImageResizer::cache('https://graph.facebook.com/' . $data->fb_user . '/picture?type=large', 'user-80x90-' . $data->fb_user, 'jpg', '80x90');

$userImgAbs = '';

$sharingMsgObj = new SharingMessages(0);
 
$sharingMsg = $sharingMsgObj->FB_SHARING_SINGLE_ENTRY($this->user->name, $data->user->name, "", $data->details);


$imgAbs = $this->canvasPage."/admin/uploads/188x200/".$flavours[0]->pic;



?>
<?php
   $sharingMsg_2 = $sharingMsgObj->FB_MANUAL_POPUP_BOX_GLOBAL($this->user->name);
   
   $imgAbs_2 = $this->canvasPage."/images/logo.png";
   
?>

<script>
function open_popup()
	{
	 
	 $("#one").css("display","none");
	 $("#two").fadeIn(1000);
	 
	}

function close_popup()
	{
	
	  $("#two").css("display","none");
	  $("#one").fadeIn(3000);
	 
	}
	
	

</script>
<script>
	
	function first_popup(id_one,id_two)
		{
		 
		 if(id_two == 'wrapper_form_two')
		 	{
			 
			 //get_flavour_default();
			 
			}
		 
		 $("#"+id_one).css("opacity",0.4);
		 $("#"+id_two).css("display","block");
		 
		}
	
	 function store_close(id_one,id_two)
	 	{
		 
		 $("#"+id_one).css("opacity",1);
		 $("#"+id_two).css("display","none");
		 
		}
	function first_popup_extra(id_one,id_two,id_three)
		{
		 //console.log(id_one);
		 //console.log(id_two);
		 
		 if(id_two == 'wrapper_form_two')
		 	{
			 
			 //get_flavour_default();
			 
			}
		 
		 $("#"+id_three).css("display","none");
		 $("#"+id_one).css("opacity",0.4);
		 $("#"+id_two).css("display","block");
		 
		}
	
</script>



</head>

<body onLoad="get_flavour_default()">
    <div id="wrapper_form_two" style="display:none;">
			
			<div class="header_top">
				<img src="images/cross.png" onClick="store_close('wrapper_ind','wrapper_form_two')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form','wrapper_form_two')"><img src="images/inbox.png"></a>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form_two','wrapper_form_two')"><img src="images/send.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="form_popup_cnt" style="padding-left:30px;">
				
				<div class="from_left_cnt">
						
						<form action="index.php?r=site/ajaxform" name="flavour" id="flavour" method="post" onSubmit="return validate()">
							
							<div class="text_field" id="friendChooser">
								<a href="javascript:;" class="bt-fs-dialog">
								
								Select a Friend
								<!--<img src="images/slectafrnd.png">-->
								
								</a>
								
								<a href="javascript:;" class="sel_frnd" style="display:none;">
								
								Select a Friend
								<!--<img src="images/slectafrnd.png">-->
								
								</a>
								
								<input type="hidden" name="friend" id="friend" value="" class="field">
								<input type="hidden" value="<?php echo $_REQUEST['signed_request']; ?>"  name="signed_request"  />
								<div class="clear"></div>
							</div>
							
							
							<div class="select_field">
								
								<select name="flavour" id="flavour" class="select" onChange="get_flavour(this.value)">
										
										<option value="">Select a Flavour</option>
										<?php
										
										
											foreach($flavour_data as $flv)
												{
												 
												 ?>
												 
												 	<option <?php if($flv['flavour_id'] == $_GET['id']){ ?> selected="selected" <?php } ?> value="<?php echo $flv['flavour_id']; ?>"><?php echo $flv['flavout_title']; ?></option>
													
												 <?php
												}
											
										?>
										
								</select>
								
								<div class="clear"></div>
							</div>
							
							<div class="text_field">
								
								<textarea name="peronal" id="peronal" class="personal">Personalize Your Message</textarea>
								
								<div class="clear"></div>
							</div>
							
							<div class="form_btn">
								
								<input type="submit" name="submit" class="btn_submit" value="" >
								
								<div class="clear"></div>
							</div>
							
						</form>
						
				</div>
				
				<div class="form_rgt_cnt">
						
						<div class="form_box_head">
							
							Madagascar Vanilla Macadamia Nut
							<div class="clear"></div>
						</div>
						
						<div class="form_box">
							
							<img src="images/form_box.png">
							<div class="clear"></div>
						</div>
						
						<div class="form_rgt_text">
							
							Chocolate cookies cannonball into a pool of yummy vanilla ice cream. Dunked deep into the creamy deliciousness, each cookie sandwich is sure to keep things cool and crunchy all summer long. 
							
							<div class="clear"></div>
						</div>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	<div id="wrapper_thanks" style="display:none;">
			
			<div class="header_top">
				<img src="images/cross.png" onClick="store_close('wrapper_ind','wrapper_thanks')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form','wrapper_thanks')"><img src="images/inbox.png"></a>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form_two','wrapper_thanks')"><img src="images/send.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="form_popup_cnt" style="padding-left:30px;">
				
					<p>Thanks for using our Application</p>
				
				<div class="clear"></div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	<div id="wrapper_ind">
			
			<div class="header">
				
				<div class="left">
						
						<p><span><?php echo count($data); ?></span>
						
						
						<img onClick="first_popup('wrapper_ind','wrapper_form')" src="images/send_to_frd_up.png"  ></p>
                        
                        <img onClick="first_popup('wrapper_ind','wrapper_form_two')" src="images/send_to_frd_btm.png">
						
				</div>
				
				<div class="right">
						
						<img  src="images/store_up.png" onClick="first_popup('wrapper_ind','wrapper_store')"><br />
						
                        <a href="javascript:;" onClick="publish_stream_pop('<?php echo $sharingMsg_2['TITLE']; ?>','<?php echo $sharingMsg_2['DETAILS']; ?>','<?php echo $this->appUrl; ?>/entry-site-<?php echo $flavours[0]->flavour_id; ?>.html','<?php echo $imgAbs_2; ?>')"><img src="images/store_btm.png"></a>
						
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="header_btm">
			
			  <div class="grand_head">	
				<a href="index.php?r=site/list&type=grand&signed_request=<?php echo $_REQUEST['signed_request']; ?>"><img src="images/grand.png"></a>
			   </div>
			   <div class="middle">
			   		
					<a href="index.php?signed_request=<?php echo $_REQUEST['signed_request']; ?>"><img src="images/home.png"></a>
					
			   </div>
			   <div class="d_collection_head">
				<a href="index.php?r=site/list&type=d&signed_request=<?php echo $_REQUEST['signed_request']; ?>"><img src="images/d_collection.png"></a>
			   </div>
			   
				<div class="clear"></div>
			</div>
			
			<div class="ind_content nut_cont">
				
				<div class="left_ind_content">
				 
				 
				  
				   <div class="top_btns">
				   		<div class="back_btn"><a href="index.php?signed_request=<?php echo $_REQUEST['signed_request']; ?>"><img src="images/back.png"></a></div>
						<div class="check_out_flavour"><div class="select_favour">
							
								<select name="favour"  onChange="sel_flavour(this.value)">
									<option value="">Select a Flavour</option>
										<?php
										
										
											foreach($flavour_data as $flv)
												{
												 
												 ?>
												 
												 	<option <?php if($flv['flavour_id'] == $_GET['id']){ ?> selected="selected" <?php } ?> value="<?php echo $flv['flavour_id']; ?>"><?php echo $flv['flavout_title']; ?></option>
													
												 <?php
												}
											
										?>
								</select>
								
							</div></div>
						<div class="clear"></div>
				   </div>
				   
				 
				   <div class="sooop">
				   		
						<img src="images/sooop.png">
						
						<div class="clear"></div>
				   </div>
				  
				   <div class="icecreams">
				   		<?php
						
						 //$avg = 2;
						
						?>
						<input type="hidden" id="avg" value="<?php echo $avg; ?>" />
						
						<input type="hidden" id="nowVotes" value="<?php echo $avg; ?>" />
						
						<ul>
						  
						  <?php
						  
						  		for($i=1;$i<=4;$i++)
									{
									 
									 if($i <= $avg)
									 	{
										?>
											
											<li><img onClick="voteUp('<?php echo $flavours[0]->flavour_id; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','<?php echo $i; ?>');" class="rollover<?php echo $i; ?> rollover"  src="images/scoop_on.png" alt="<?php echo $i; ?>"></li>
											
										<?php
										
										}
										 else
										     {
											  ?>
											     
												 <li><img onClick="voteUp('<?php echo $flavours[0]->flavour_id; ?>','','','<?php echo $_REQUEST['signed_request']; ?>','<?php echo $i; ?>');" class="rollover<?php echo $i; ?> rollover"  src="images/scoop_off.png" alt="<?php echo $i; ?>"></li>
												 
											  <?php
											 }
									 
									}
								
						  ?>
						  
							
							
						</ul>
						
						<div class="number">
								<p class="num" id="nowVotesTD"><?php echo $avg; ?></p>
						</div>
						
						<div class="out">
							<p>Scoops<br />
out of 4</p>
						</div>
						
						<div class="clear"></div>
				   </div>
				   
				   <div class="text_ind">
				   		
						<p><span id="people"><?php echo $people; ?></span> people rated this flavour</p>
						
				   		<div class="clear"></div>
				   </div>
				   <div class="text_ind">
				  	 <img src="images/progress.gif" class="voteProgressImg" style="display:none;">
				      <div class="clear"></div>
				   </div>
				   
				   <div class="box_ind">
				   	
					    <img src="admin/uploads/188x200/<?php echo $flavours[0]->pic; ?>" width="325" height="264">
						
						<div class="clear"></div>
				   </div>
				   
				   <div class="box_ind align_btns">
				   	
					    <img onClick="open_popup()" src="images/nutrational_information.png">
						
						<div class="clear"></div>
				   </div>
				   
				   <div class="box_ind align_btns">
				   	
					    <img onClick="first_popup('wrapper_ind','wrapper_store')" src="images/product_locator.png">
						
						<div class="clear"></div>
				   </div>
				   
				
				</div>
				
				<div class="rgt_ind_content one_rgt head_new" id="one" >
				   
				    <div class="form_box_head head_ice">
							
							<?php echo $flavours[0]->flavout_title; ?>
							<div class="clear"></div>
						</div>
					
					<div class="rgt_ind_text">
							
							<p><?php echo $flavours[0]->detail; ?></p>
							<div class="clear"></div>
					</div>
					
					<div class="rgt_like_gift">
						
						<div class="like">
							<a href="javascript:;" onClick="publish_stream_pop('<?php echo $sharingMsg['TITLE']; ?>','<?php echo $sharingMsg['DETAILS']; ?>','<?php echo $this->appUrl; ?>/entry-site-<?php echo $flavours[0]->flavour_id; ?>.html','<?php echo $imgAbs; ?>')"><img src="images/like.png"></a>
						</div>
						
						<div class="gift">
							<a href="javascript:;"><img src="images/gift.png" onClick="first_popup('wrapper_ind','wrapper_form_two')"></a>
						</div>
						
						<div class="clear"></div>
					</div>
				
				</div>
				
				
				<div class="rgt_ind_content nut_cont_rgt" id="two" style="display:none;">
				
					
					<div class="top_nut">
						<img onClick="close_popup()" src="images/cross.png">
						<div class="clear"></div>
					</div>
					
					<div class="wrap_nut">
					     
						 <div class="heading">
						 	  
							  Ingredients
							  
							  <div class="clear"></div>
						 </div>
						 
						 <div class="nut_text">
						 	
							<p><?php echo $flavours[0]->ingrediants; ?></p>
							
							<div class="clear"></div>
						 </div>
						 
						 <div class="heading">
						 	  
							  Nutrition Facts
							  
							  <div class="clear"></div>
						 </div>
						 
						 <div class="ingrediants">
						 		
								<div class="step">
									
									<div class="left_step">
										Serving Size
									</div>
									
									<div class="rgt_step">
										1/2 Cup
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Calories
									</div>
									
									<div class="rgt_step">
										160
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Calories from Fat
									</div>
									
									<div class="rgt_step">
										70
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Total Fat
									</div>
									
									<div class="rgt_step">
										8(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step mrg_step">
										Saturated Fat
									</div>
									
									<div class="rgt_step">
										4(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step mrg_step">
										Trans Fat
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Cholesterol
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Sodium
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Total Carbohydrates
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
								<div class="step">
									
									<div class="left_step mrg_step">
										Dietary Fiber
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step mrg_step">
										Sugars
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Protein
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Calcium
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Vitamin A
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Vitamin C
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Iron
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									<div class="left_step">
										Gluten-Free
									</div>
									
									<div class="rgt_step">
										0(g)
									</div>
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step top_nut_margin">
									
									*Percent Daily Values (DV) are based on a 2,000 calorie diet. 
									<div class="clear"></div>
							   </div> <!-- step -->
							   
							   <div class="step">
									
									Current as of May, 2012. Please see shelf packaging for any changes.
									<div class="clear"></div>
							   </div> <!-- step -->
								
								
								<div class="clear"></div>
						 </div> <!-- ingrediants -->
						 
						<div class="clear"></div>
					</div> <!-- rgt wrap -->
					
				
				</div> <!-- right contetn -->
				
				
				<div class="clear"></div>
			</div>
			
			
			
			
			
		
		<div class="clear"></div>
	</div>
	
	
	
	<!---     popup ------------------->
	
	
	<div id="wrapper_form" style="display:block; z-index:-10;">
			
			<div class="header_top">
				<img src="images/cross.png" onClick="store_close('wrapper_ind','wrapper_form')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form','wrapper_form')"><img src="images/inbox.png"></a>
					
				</div>
				
				<div class="form_herader_rgt">
				
					<a href="javascript:;" onClick="first_popup_extra('wrapper_ind','wrapper_form_two','wrapper_form')"><img src="images/send.png"></a>
						
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
	
    <div id="wrapper_store" style="display:block; z-index:-10;">
			
			<div class="header_top">
				<img src="images/cross.png" onClick="store_close('wrapper_ind','wrapper_store')">
				<div class="clear"></div>
			</div>
			
			<div class="form_header">
				
				<div class="form_header_left">
					
					<p>Select an area</p>
					<div class="select" style="margin-left:-10px !important;">
						<select name="area" id="area" onChange="get_area(this.value)">
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
						<input type="text" name="saerch" id="saerch" value="" onChange="zipcode(this.value)">
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
	
	function get_flavour_default()	
		{
		 
		 //var val = $("#flavour").val();
		 
		 var val = <?php echo $_GET['id']; ?>;
		 
		 if(val == '')
		 	{
			 
			 alert("Please select any value");
			 
			}
			 else
			     {
					 //$.blockUI();
					 $(".form_rgt_cnt").css("opacity",0.4);
					 $.ajax({
						  url: 'index.php?r=site/loadIcream&id='+val,
						  success: function(data) {
							$('.form_rgt_cnt').html(data);
							//alert('Load was performed.');
							//$.unblockUI();
							$(".form_rgt_cnt").css("opacity",1);
							return false;
						  }
						});
				}
		    
		 
		}
	
	function validate()
	 	{
		 
		
		 var friend = $("#friend").val();
		 
		 if(friend == '')
		 	{
			 
			 alert("please select anyone friend");
			 
			}
			
		 var flavour = $("#flavour :selected").val();
		 
		
		 
		 if(flavour == '')
		 	{
			 
			 alert("please select anyone flavour");
			 
			}
		
		var peronal = $("#peronal").val();
		 
		 if(peronal == '')
		 	{
			 
			 alert("please Fill some personals in field");
			 
			}
		  
		  if(friend == '' || flavour == '' || peronal =='')
		  	{
			 
			 return false;
			 
			}
			 else
			     {
				  
				  post_form();
				  
				  return false;
				  
				 }
			 
		}
	
	function post_form()
		{
		 $.blockUI();
		 $.ajax({
			   type: 'POST',
			   url: $('#flavour').attr('action'),
			   data: $('#flavour').serialize(),   // I WANT TO ADD EXTRA DATA + SERIALIZE DATA
			   success: function(data){
				   
				   $('.bt-fs-dialog').css("display","block");
		 
		 		   $('.sel_frnd').css("display","none");
				    
				   $("#wrapper_form_two").css("display","none");
				   
				   $("#wrapper_thanks").css("display","block");
				 
				  
				   
				  //$('.form_popup_cnt').append('<p>Data Added successfully</p>');
				  $.unblockUI();
			   }
			});
		 
		}
	
	function get_flavour(val)	
		{
		 //$.blockUI();
		 $(".form_rgt_cnt").css("opacity",0.4);
		 $.ajax({
			  url: 'index.php?r=site/loadIcream&id='+val,
			  success: function(data) {
				$('.form_rgt_cnt').html(data);
				//alert('Load was performed.');
				//$.unblockUI();
				$(".form_rgt_cnt").css("opacity",1);
				return false;
			  }
			});
		 
		}
		
	function get_flavour(val)	
		{
		 if(val == '')
		 	{
			 
			 alert("Please select any value");
			 
			}
			 else
			     {
					 //$.blockUI();
					 $(".form_rgt_cnt").css("opacity",0.4);
					 $.ajax({
						  url: 'index.php?r=site/loadIcream&id='+val,
						  success: function(data) {
							$('.form_rgt_cnt').html(data);
							//alert('Load was performed.');
							//$.unblockUI();
							$(".form_rgt_cnt").css("opacity",1);
							return false;
						  }
						});
				}
		    
		 
		}	
		
		
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
				
				$('#saerch').val('');
				
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
				
				$('#area').val('');
				
				return false;
			  }
			});
		 
		}
	 
	 function sel_flavour(val)
	 	{
		 
		 window.location = "index.php?r=site/indivual&id="+val+"&signed_request=<?php echo $_REQUEST['signed_request']; ?>";
		 
		}
	 jQuery(document).ready(function($) {
     
    $(".bt-fs-dialog").fSelector({
	
      closeOnSubmit:true,
      
      max:4,
      
     // getStoredFriends : [$("#friend_id1").val()],

	
      onSubmit: function(response){
   
 
        // example response usage
        var selected_friends = [];
        $.each(response, function(k, v){
          selected_friends[k] = v;
   
   
        });
 
 
		 totalTagged = selected_friends.length;
		 
		 //$('.bt-fs-dialog').html(totalTagged+" friend"+getS(totalTagged)+" selected ");
		 
		 $('.bt-fs-dialog').css("display","none");
		 
		 $('.sel_frnd').css("display","block");
		 
		 $('.sel_frnd').html(totalTagged+" friend"+getS(totalTagged)+" selected ");
		 
		 
		 
		 
		 
		 $("#friend").val(selected_friends);
       
 
       
      }
    });
  });
	</script>
	