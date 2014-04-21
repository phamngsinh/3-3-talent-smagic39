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