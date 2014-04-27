<?php if (isset($_GET['cat_id'])): ?>
    <h1>33talent Search Results</h1>
<?php else: ?>
    <h1>33talent Currents Jobs Details</h1>
<?php endif; ?>
<div class="job-list front-page">
    <ul>
        <?php
        if ($dataProvider) {
            foreach ($dataProvider as $job) {
                ?>
                <li>

                    <h4><?php echo $job->title ?></h4>

                    <div class="job-overview">
                        <?php
                        $location = JobLocation::model()->getLocation($job->job_location_id);
                        $worktype = JobWorktype::model()->getName($job->worktype_id);
                        echo $location . ' | ' . $worktype;
                        ?>
                    </div>

                    <div class="job-para">
                        <?php echo $job->descriptions; ?>

                    </div>

                    <div class="job-buttons">
                        <a href="<?php echo Yii::app()->createUrl('page/view', array('id' => $job->job_id)); ?>"
                           class="view-more">View More</a>
                        <a href="<?php echo Yii::app()->createUrl('page/register', array('job' => $job->job_id)); ?>">Apply
                            Now</a>

                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(Yii::app()->getBaseUrl(true)); ?>"
                           data-href="<?php echo Yii::app()->getBaseUrl(true); ?>" target="_blank">
                            Share on Facebook
                        </a>

                    </div>

                </li>

                <?php
            }
        }else{
            echo '<strong>No Results found<strong>';
        }
        ?>
    </ul>

    <?php
    // the pagination widget with some options to mess
    $this->widget('CLinkPager', array(
        'currentPage' => $pages->getCurrentPage(),
        'itemCount' => $item_count,
        'pageSize' => $page_size,
        'maxButtonCount' => 5,
        'header' => '',
        'htmlOptions' => array('class' => 'pages'),
    ));
    ?>
</div>
<!--job-list end-->
<div class="search-jobs">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'search-form',
        'enableAjaxValidation' => false,
        'method' => 'GET',
        'action' => Yii::app()->createUrl('page'),
    ));
    ?>
    <div class="search-job-title">Search Jobs</div>
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
        if (isset($_GET['sub_cat_id']) && $_GET['sub_cat_id']) {

            $tmp_cat_id = $_GET['sub_cat_id'];
            echo CHtml::dropDownList('sub_cat_id', '', $sub_categories, array(
                'options' => array($tmp_cat_id => array('selected' => true)),
            ));
        } else {
            echo CHtml::dropDownList('sub_cat_id', '', array(
                '' => '-- All Sub Categories --',
            ));
        }
        ?>
    </div>

    <div class="form-row"><?php
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
            <img src="images/register-cv.png" width="276" height="98" alt=""></a></div>
    <div><a href="<?php echo Yii::app()->createUrl('page/registerAlert'); ?>"><img src="images/job-alert.png" width="276" height="98" alt=""></a></div>

</div>
<!--home-enquiry-->
<div class="clear"></div>

