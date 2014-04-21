<h1>33talent Currents Jobs Details</h1>
        	<div class="job-list">
                    <ul>
                 <?php
                    if($dataProvider) {
                        foreach ($dataProvider as $job) {
                    ?>
                	<li>
<!--                        <div class="job-buttons">
                            <a href="#" class="view-more">View More</a>
                            <a href="#">Apply Now</a>
                            <a href="#">Share</a>
                            
                        </div>-->
                        
                    	<h4><?php echo $job->title ?></h4>
                        <div class="job-overview">
                                <?php 
                                $location = JobLocation::model()->getLocation($job->job_location_id);
                                $worktype = JobWorktype::model()->getName($job->worktype_id);
                                echo $location. ' | ' .$worktype;
                                ?>
                        </div>
                        
                        <div class="job-para">
                        	<?php echo $job->descriptions; ?>
                                
                        </div>
                        
                        <div class="job-buttons">
                            <a href="<?php echo Yii::app()->createUrl('page/view', array('id'=>$job->job_id)); ?>" class="view-more">View More</a>
                            <a href="#">Apply Now</a>
                            <a href="#">Share</a>
                            
                        </div>
                    
                    </li>  
                           
                    <?php
                        }
                    }
                    ?>           
                    </ul>
                    
            <?php

            // the pagination widget with some options to mess
            $this->widget('CLinkPager', array(
                            'currentPage'=>$pages->getCurrentPage(),
                            'itemCount'=>$item_count,
                            'pageSize'=>$page_size,
                            'maxButtonCount'=>5,
                            'header'=>'',
                            'htmlOptions'=>array('class'=>'pages'),
                    ));
            ?>
            </div>
<!--job-list end-->	
<div class="search-jobs">    
<form action="" method="get">
                <div class="search-job-title">Seach Jobs</div>	    
                <div class="search-job-para">Find the right job for you.</div>
                
                   	<div class="form-row"><select name="Sectors">
                   	  <option value="Sector" selected>Sector</option>
                   	  <option value="Sector" selected>Sector</option>
                   	  <option value="Sector" selected>Sector</option>
                   	  <option value="Sector" selected>Sector</option>
                    </select></div>    
                    
                   	<div class="form-row"><select name="Sub-Category">
                   	  <option value="Sub Category" selected>All Sub Categories</option>
                   	  <option value="Sub Category" selected>All Sub Categories</option>
                   	  <option value="Sub Category" selected>All Sub Categories</option>
                    </select>    </div>
                    
                   	<div class="form-row"><select name="Locations">
                   	  <option value="Locations" selected>All Locations</option>
                   	  <option value="Locations" selected>All Locations</option>
                   	  <option value="Locations" selected>All Locations</option>
                   	  <option value="Locations" selected>All Locations</option>
                   	  <option value="Locations" selected>All Locations</option>
                    </select> </div>   
                    
                   	<div class="form-row"><select name="Work-Type">
                   	  <option value="Work Type" selected>All Work Types</option>
                   	  <option value="Work Type" selected>All Work Types</option>
                   	  <option value="Work Type" selected>All Work Types</option>
                   	  <option value="Work Type" selected>All Work Types</option>
                    </select> </div>   
                                        
                    <div class="form-row"><input name="Keywords" type="text" placeholder="Keywords"></div>
                    
                  <div class="form-row submit-button"><input type="submit" value="Search Jobs"></div>
                    
              </form>
              
              
            <div><a href="#"><img src="images/job-alert.png" width="276" height="98" alt=""></a></div>
            <div><a href="#"><img src="images/register-cv.png" width="276" height="98" alt=""></a></div>
        
        </div>
            <!--home-enquiry-->
                    <div class="clear"></div>
            
            