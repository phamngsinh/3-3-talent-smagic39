<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$local = new JobLocation();
$workTy = new JobWorktype();
$categories = $this->getAllCategory();
$locations = CHtml::ListData(JobLocation::model()->findAll('city IS NOT NULL GROUP BY city'), 'city', 'city');
$worktypes = CHtml::ListData(JobWorktype::model()->findAll(), 'worktype_id', 'name');
$sub_categories = $this->getSubAllCategory();
?>
<div class="search-jobs">    
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'search-form',
        'enableAjaxValidation' => false,
        'method' => 'GET',
        'action' => Yii::app()->createUrl('page'),
    ));
    ?>
    <div class="search-job-title">Seach Jobs</div>	    
    <div class="search-job-para">Find the right job for you.</div>

    <div class="form-row">
        <?php
        $tmp_cat_id = (isset($_GET['cat_id']) && $_GET['cat_id'] ) ? $_GET['cat_id'] : '';
        echo CHtml::dropDownList('cat_id', '', $categories, array(
            'prompt' => '-- All Categories --',
            'options' => array($tmp_cat_id => array('selected' => true)),
            'selected' => true,
            'ajax' => array(
                'type' => 'POST', //request type
                'url' => Yii::app()->createUrl('page/dynamicsubCategories'), //url to call
                'update' => '#sub_cat_id',
                'data' => array('cat_id' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
            )
        ));
        ?>
    </div>
    <div class="form-row">
        <?php
        $tmp_cat_id = '';
        $prompt = array('prompt' => '-- All Sub Categories --');
        if(isset($_GET['sub_cat_id']) && $_GET['sub_cat_id'] ){
            $tmp_cat_id = $_GET['sub_cat_id'];
            $prompt = array();
            
        }
        echo CHtml::dropDownList('sub_cat_id', '', $sub_categories, array(
            'prompt' => '-- All Sub Categories --',
            'options' => array($tmp_cat_id => array('selected' => true)),
        ));
        ?>
    </div>

    <div class="form-row">
        <?php
        $tmp_job_location = (isset($_GET['JobLocation']['city']) && $_GET['JobLocation']['city']) ? $_GET['JobLocation']['city'] : '';
        echo $form->dropDownList($local, 'city', $locations, array(
            'prompt' => '-- All Locations --',
            'options' => array($tmp_job_location => array('selected' => true)),
            'selected' => true,
        ));
        ?>
    </div>

    <div class="form-row"><?php
        $tmp_work_type = (isset($_GET['JobWorktype']['worktype_id']) && $_GET['JobWorktype']['worktype_id']) ? $_GET['JobWorktype']['worktype_id'] : '';
        echo $form->dropDownList($workTy, 'worktype_id', $worktypes, array(
            'prompt' => '-- All Work Types --',
            'options' => array($tmp_work_type => array('selected' => true)),
            'selected' => true,
        ));
        ?>
    </div>
    <?php $tmp_keywords = (isset($_GET['Keywords']) && $_GET['Keywords']) ? $_GET['Keywords'] : ''; ?>
    <div class="form-row"><input name="Keywords" type="text" placeholder="Keywords" value="<?php echo $tmp_keywords ?>"></div>

    <div class="form-row submit-button"><input type="submit" value="Search Jobs"></div>

    <?php $this->endWidget(); ?>


    <div><a href="<?php echo Yii::app()->createUrl('page/registerCV'); ?>">
            <img src="<?php echo Yii::app()->getBaseUrl('/')?>/images/register-cv.png" width="276" height="98" alt=""></a></div>
    <div><a href="<?php echo Yii::app()->createUrl('page/registerAlert'); ?>"><img src="<?php echo Yii::app()->getBaseUrl('/')?>/images/job-alert.png" width="276" height="98" alt=""></a></div>


</div>