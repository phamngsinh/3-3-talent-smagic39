<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1><?php echo $job->title; ?></h1><div class="job-buttons" style="float: right; margin-top: -76px;">
                            <?php echo CHtml::link('Apply Now',array('page/register','job'=>$job->job_id)); ?>

</div>

<div class="job-list">
    <?php 
        $location = JobLocation::model()->getLocation($job->job_location_id);
        $worktype = JobWorktype::model()->getName($job->worktype_id);
    ?>
        <div class="about-job">
            <div class="left-job">
                <p><b>Salary</b>: <?php echo Yii::app()->numberFormatter->formatCurrency($job->base_salary, ""); ?></p>
                <p><b>Date advertised</b>: <?php echo $job->date_posted; ?></p>
            </div>
            <div class="right-job">
                <p><b>Job Location</b>: <?php echo $location; ?></p>
                <p><b>Work type</b>: <?php echo $worktype; ?></p>
            </div>
        </div>
    <div class="job-description">
        <?php echo $job->descriptions; ?>
    </div>
    <div>
        <strong>The Role...?</strong><br/>
        <p><?php echo strip_tags($job->benefits); ?></p>
    </div>
    <div>
        <strong>You...?</strong><br/>
        <p><?php echo strip_tags($job->experience_requirements); ?></p>
    </div>
    <div>
        <strong>Other...?</strong><br/>
        <p><?php echo $job->responsibilities; ?></p>
    </div>
    <div>
        <strong>How to get touch:</strong><br/>
        <p><?php echo $job->incentives; ?></p>
    </div>
</div>
<div class="search-jobs">    
<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'search-form',
        'enableAjaxValidation' => false,
        'method'=>'GET',
        'action'=>Yii::app()->createUrl('page/browserJob'),
    ));
    ?>
                <div class="search-job-title">Seach Jobs</div>	    
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
                         echo CHtml::dropDownList('sub_cat_id', '',  array(
                             'prompt' => '-- All Locations --',
                         ));
                        ?>
                    </div>
                    
                   	<div class="form-row"><?php
                            echo $form->dropDownList($job, 'job_location_id', $locations, array(
                                'prompt' => '-- All Locations --',
                                'selected' => true,
                            ));
                            ?>
                        </div>   
                    
                   	<div class="form-row"><?php
                            echo $form->dropDownList($job, 'worktype_id', $worktypes, array(
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
<div class="clear"></div>
<div class="job-buttons"><a href="<?php echo Yii::app()->createUrl('page/index'); ?>">Back to list jobs</a>
<?php echo CHtml::link('Apply Now',array('page/register','job'=>$job->job_id)); ?>
</div>