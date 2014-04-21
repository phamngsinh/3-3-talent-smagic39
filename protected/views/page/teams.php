<div class="our-team">
            	<ul>           
                    <?php if($dataProvider) {
                        foreach ($dataProvider->getData() as $team) {
                        ?>
                	<li>
                    
                    	<div class="our-team-pic">
           	          <img src="images/our-team-pic1.jpg" width="168" height="168" alt="" class="respimg"></div>
                        <!--our-team-pic-->
                        
                        <div class="our-team-details">
                        
                            <div class="our-team-title">
                                <h3><?php echo $team->name; ?></h3>
                                <div class="our-team-social">
                                    <a href="<?php echo $team->link_twitter; ?>" class="twitter"></a>
                                    <a href="<?php echo $team->link_facebook; ?>" class="linkedin"></a>
                                    <a href="<?php echo $team->link_email; ?>" class="mail"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!--our-team-title-->
                        
                          <h5><?php echo $team->positions; ?></h5>
                          <div class="our-team-para">
                              <?php echo $team->descriptions; ?>  
                          <div class="our-team-button">
                          	<a href="<?php echo $team->teams_id; ?>">View Profile</a>
                          </div>
                                
                          </div>
                                                    
                        </div>
                        <!--our-team-details-->
                        		<div class="clear"></div>
                    </li>
                    <?php
                        }
                     }
                        
                    ?>
                    
                </ul>
            </div>
            <!--our-team-->