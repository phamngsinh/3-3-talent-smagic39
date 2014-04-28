<?php
/* @var $this JobsController */
/* @var $model Jobs */

Yii::import('application.vendors.*');
require_once('facebook-php-sdk-master/facebook.php');

$config = array(
    'appId' => CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value4_text),
    'secret' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value5_text),
    'cookie' => true,
    'appName' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value4_text),
    'canvasPage' => "http://apps.facebook.com/" . @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value1) . "/",
    'canvasUrl' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value5_text),
    'permissions' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value2),
    'fileUpload' => true
);
//$config = array(
//    'appId' => '242607099273604',
//    'secret' => 'a9e0ce1069375395e2f565ca04e94d27',
//    'fileUpload' => false, // optional
//    'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
//);
$facebook = new Facebook($config);
$user_id = $facebook->getUser();
$logout_url = '';
$login_url = '';
$share_link = '';
if ($user_id) {
    $url  = explode('admin', Yii::app()->getBaseUrl(true));
    $share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . $url[0].'index.php?r=page/view&id='. $model->job_id;
} else {
    $share_link = $facebook->getLoginUrl(array('scope' => 'publish_actions'));
}

$this->breadcrumbs = array(
    'Jobs' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Jobs', 'url' => array('index')),
    array('label' => 'Create Jobs', 'url' => array('create')),
    array('label' => 'Update Jobs', 'url' => array('update', 'id' => $model->job_id)),
    array('label' => 'Delete Jobs', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->job_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Jobs', 'url' => array('admin')),
);
?>

<h1>View Jobs #<?php echo $model->title; ?></h1>
<?php
$categories = JobCategories::Model()->getCatName($model->cat_id);
$worktype = JobWorktype::Model()->getName($model->worktype_id);
$location = JobLocation::Model()->getLocation($model->job_location_id);
?>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(// related city displayed as a link
            'label' => 'Share Facebook',
            'type' => 'raw',
            'value' => CHtml::link('Share Facebook', $share_link,array('target'=>'_blank')),
        ),
        'job_id',
        'title',
        array(
            'name' => 'cat_id',
            'type' => 'raw',
            'value' => $categories,
        ),
        array(
            'name' => 'worktype_id',
            'type' => 'raw',
            'value' => $worktype,
        ),
        array(
            'name' => 'job_location_id',
            'type' => 'raw',
            'value' => $location,
        ),
        array(
            'name' => 'descriptions',
            'type' => 'raw',
            'value' => strip_tags($model->descriptions),
        ),
        array(
            'name' => 'benefits',
            'type' => 'raw',
            'value' => strip_tags($model->benefits),
        ),
        array(
            'name' => 'experience_requirements',
            'type' => 'raw',
            'value' => strip_tags($model->experience_requirements),
        ),
        array(
            'name' => 'education_requirements',
            'type' => 'raw',
            'value' => strip_tags($model->education_requirements),
        ),
        'base_salary',
        'date_posted',
        array(
            'name' => 'incentives',
            'type' => 'raw',
            'value' => strip_tags($model->incentives),
        ),
        array(
            'name' => 'responsibilities',
            'type' => 'raw',
            'value' => strip_tags($model->responsibilities),
        ),
        array(
            'name' => 'special_commitments',
            'type' => 'raw',
            'value' => strip_tags($model->special_commitments),
        ),
    ),
));
?>
