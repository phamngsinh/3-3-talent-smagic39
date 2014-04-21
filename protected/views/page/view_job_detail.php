<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1><?php echo $job->title; ?></h1>
<div class="job-overview">
<?php 
    $location = JobLocation::model()->getLocation($job->job_location_id);
    $worktype = JobWorktype::model()->getName($job->worktype_id);
?>
    <ul class="about-page">
        <li>Job Location: <?php echo $location; ?></li>
        <li>Work type: <?php echo $worktype; ?></li>
        <li>Base Salary: <?php echo Yii::app()->numberFormatter->formatCurrency($job->base_salary, ""); ?></li>
        <li>Industry: <?php echo $job->industry; ?></li>
        <li>Specific qualifications required for this role: <?php echo $job->qualifications; ?></li>
        <li>Responsibilities associated with this role: <?php echo $job->responsibilities; ?></li>
        <li>Skill: <?php echo $job->skills; ?></li>
        <li>Any special commitments associated with this job posting. Valid entries include Veteran commit: <?php echo $job->special_commitments; ?></li>
        <li>working hours for this job: <?php echo $job->work_hours; ?></li>
    </ul>
</div>
<div>
    <h2>Job Descriptions:</h2>
    <p><?php echo $job->descriptions; ?></p>
</div>
<div>
    <h2>Description of benefits associated with the job:</h2>
    <p><?php echo $job->benefits; ?></p>
</div>
<div>
    <h2>Educational background needed for the position:</h2>
    <p><?php echo $job->education_requirements; ?></p>
</div>
<div>
    <h2>Description of skills and experience needed for the position:</h2>
    <p><?php echo $job->experience_requirements; ?></p>
</div>
<div>
    <h2>Organization offering the job position:</h2>
    <p><?php echo $job->hiring_organization_descriptions; ?></p>
</div>
<div>
    <h2>Description of bonus and commission compensation aspects of the job:</h2>
    <p><?php echo $job->incentives; ?></p>
</div>
<div>
    <h2>Publication date for the job posting:</h2>
    <p><?php echo $job->date_posted; ?></p>
</div>