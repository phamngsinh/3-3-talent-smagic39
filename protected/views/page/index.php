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
                            <?php echo CHtml::link('Apply Now',array('page/register','job'=>$job->job_id)); ?>
                            
                            <a href="https://www.facebook.com/sharer/sharer.php?u= <?php echo urlencode(Yii::app()->getBaseUrl(true)); ?>" data-href="<?php echo Yii::app()->getBaseUrl(true); ?>"  target="_blank">
                                Share on Facebook
                             </a>
                            
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
<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'search-form',
        'enableAjaxValidation' => false,
        'method'=>'get',
    ));
    ?>
                <div class="search-job-title">Search Jobs</div>	    
                <div class="search-job-para">Find the right job for you.</div>
                
                   	<div class="form-row">
                            <?php
                                echo CHtml::dropDownList('cat_id', '', $categories, array(
                                    'prompt' => '-- All Categories --',
                                    'selected' => true,
                                    'ajax' => array(
                                        'type'=>'POST', //request type
                                        'url'=>Yii::app()->createUrl('page/dynamicsubCategories'), //url to call 
                                        'update'=>'#sub_cat_id', 
                                        'data' => array('cat_id' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
                                    )
                                ));

                        ?>
                        </div>
                   <div class="form-row">
                       <?php
                        echo CHtml::dropDownList('sub_cat_id', '',  array());
                       ?>
                   </div>
                    
                   	<div class="form-row"><?php
                            echo $form->dropDownList($model, 'job_location_id', $locations, array(
                                'prompt' => '-- All Locations --',
                                'selected' => true,
                            ));
                            ?>
                        </div>   
                    
                   	<div class="form-row"><?php
                            echo $form->dropDownList($model, 'worktype_id', $worktypes, array(
                                'prompt' => '-- All Work Types --',
                                'selected' => true,
                            ));
                            ?>
                        </div>   
                                        
                    <div class="form-row"><input name="Keywords" type="text" placeholder="Keywords"></div>
                    
                  <div class="form-row submit-button"><input type="submit" value="Search Jobs"></div>
                    
    <?php $this->endWidget(); ?>
              
              
            <div><a href="#"><img src="images/job-alert.png" width="276" height="98" alt=""></a></div>
            <div><a href="#"><img src="images/register-cv.png" width="276" height="98" alt=""></a></div>
        
        </div>
            <!--home-enquiry-->
    <div class="clear"></div>
            
            