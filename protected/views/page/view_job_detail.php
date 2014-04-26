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
        <p><?php echo strip_tags($job->benefits); ?></p>
    </div>
    <div>
        <p><?php echo strip_tags($job->experience_requirements); ?></p>
    </div>
    <div>
        <p><?php echo $job->responsibilities; ?></p>
    </div>
    <div>
        <strong>How to get touch:</strong><br/>
        <p><?php echo $job->incentives; ?></p>
    </div>
</div>

<?php 
    $this->renderPartial('_search_right', array(), FALSE, TRUE);
?>
<div class="clear"></div>
<div class="job-buttons"><a href="<?php echo Yii::app()->createUrl('page/index'); ?>">Back to list jobs</a>
<?php echo CHtml::link('Apply Now',array('page/register','job'=>$job->job_id)); ?>
</div>