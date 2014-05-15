<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 function strip_single($tag,$string){
    $string=preg_replace('/<'.$tag.'[^>]*>/i', '', $string);
    $string=preg_replace('/<\/'.$tag.'>/i', '', $string);
    return $string;
  } 
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
    <div class="job-description style-tinymce">
        <?php echo $job->descriptions; ?>
    </div><br/>
    <?php if($job->benefits): ?>
    <div  class="style-tinymce">
        <strong>Job Benefits:</strong><br/>
        <p><?php echo $job->benefits; ?></p>
    </div>
    <?php endif; ?>
    <?php if($job->education_requirements): ?>
    <div  class="style-tinymce">
        <strong>Educational Background:</strong><br/>
        <p><?php echo $job->education_requirements ?></p>
    </div>
    <?php endif; ?>
    <?php if($job->experience_requirements): ?>
    <div  class="style-tinymce">
        <strong>Skills and Experience:</strong><br/>
        <p><?php echo $job->experience_requirements; ?></p>
    </div>
    <?php endif; ?>
    <?php if($job->responsibilities): ?>
    <div  class="style-tinymce">
        <strong>Job Responsibilities:</strong><br/>
        <p><?php echo $job->responsibilities; ?></p>
    </div>
    <?php endif; ?>
    <?php if($job->special_commitments): ?>
        <strong>Any special commitments associated:</strong>
    <div class="style-tinymce">
        <p><?php echo $job->special_commitments; ?></p>
    </div>
    <?php endif; ?>
</div>

<?php 
    $this->renderPartial('_search_right', array(), FALSE, TRUE);
?>
<div class="clear"></div>
<div class="job-buttons"><a href="<?php echo Yii::app()->createUrl('page/index'); ?>">Back to list jobs</a>
<?php echo CHtml::link('Apply Now',array('page/register','job'=>$job->job_id)); ?>
</div>