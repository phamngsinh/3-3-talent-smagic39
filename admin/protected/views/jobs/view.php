<?php
/* @var $this JobsController */
/* @var $model Jobs */

Yii::import('application.vendors.*');
require_once('facebook-php-sdk-master/facebook.php');

$config = array(
    'appId' => CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value4_text),
    'secret' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value5_text),
    'cookie' => true,
    'scope' => 'manage_page,user_photos,photos,publish_stream',
    'appName' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value4_text),
    'canvasPage' => "http://apps.facebook.com/" . @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value1) . "/",
    'canvasUrl' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_URLS'))->value5_text),
    'permissions' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name' => 'FACEBOOK_KEYS'))->value2),
    'fileUpload' => true
);
$config_new = array(
    'appId' =>'707092476020541',   
    'secret' => '3848cf6fe5e1bd455fdf89d1f6023300',
    'scope' => 'manage_pages,status_update,publish_actions',
    'fileUpload' => true,
    'allowSignedRequest' => true,
);
//$config = array(
//    'appId' => '242607099273604',
//    'secret' => 'a9e0ce1069375395e2f565ca04e94d27',
//    'scope' => 'manage_page,user_photos,photos,publish_stream',
//    'fileUpload' => true, // optional
//    'allowSignedRequest' => true, // optional, but should be set to false for non-canvas apps
//);

$facebook = new Facebook($config_new);
$user_id = $facebook->getUser();
$logout_url = '';
$login_url = '';
$share_link = $facebook->getLoginUrl(array('scope' => 'manage_pages,status_update,publish_actions'));
$status = 'false';
$fb_tmp = '';
$page = Ms::model()->findByAttributes(array('var_name' => 'APP_DETAILS'))->value1;

$fb_page = $page ? explode(';',$page) : null;

if ($user_id) {
    
    $pageAccount=$facebook->api('/me?fields=accounts');
     $mLikes = $pageAccount['accounts']['data'];

    $fb_tmp = '<select name="list_page" id="page_export">';
   $fb_tmp.='<option value="">Select Page</option>';
     
    if (!empty($mLikes)) {

        foreach ($mLikes as $key) {
           // $response = $facebook->api('/'.$key.'/');
            $fb_tmp.='<option value="' . $key['id'] . '">' . $key['name'] . '</option>';
           
        }

    }else{

        $fb_tmp .='<option value="">me</option>';
    }
    $fb_tmp .='</select>';
    
   
    $url = explode('admin', Yii::app()->getBaseUrl(true));
    //$share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . $url[0] . 'index.php?r=page/view&id=' . $model->job_id;
    $status = 'true';
  
    if (isset($_POST['status']) && mysql_escape_string($_POST['status'] == 'true')) {
       
       
       
        if (!empty($_POST['page_id'])) {
            
          
            try {
            $params = $facebook->getAccessToken();
            $params = array('access_token' => $params);                
            
           // $page_info = $facebook->api("/" . $_POST['page_id'] . "?fields=access_token");
            
            
            $accounts = $facebook->api('/me/accounts', 'GET', $params);  
            
            foreach($accounts['data'] as $account) {
                    if( $account['id'] == $_POST['page_id'] || $account['name'] == $_POST['page_id'] ){
                            $fanpage_token = $account['access_token'];
                    }
            }         
           
            $facebook->setAccessToken($fanpage_token);
        
          
            $response = $facebook->api(
                "/".$_POST['page_id']."/feed",
                "POST",
                array (
                     'link' => urldecode($url[0] . 'index.php?r=page/view&id=' . $model->job_id),
                     'message' => $model->title,
                     'name' => $model->title,
                     'description' => strip_tags($model->descriptions),
                     'access_token' => $fanpage_token
                )
            );
             echo 'done';
           // print_r($response);
            } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        //print_r($e->getType());
        //print_r($e->getMessage());
                echo 'no';
      }   
//        $ret_obj = $facebook->api('/' . $_POST['page_id'] . '/feed', 'POST', array(
//            'link' => urldecode($url[0] . 'index.php?r=page/view&id=' . $model->job_id),
//            'message' => $model->title,
//            'name' => $model->title,
//            'description' => strip_tags($model->descriptions),
//            'picture' => $url[0] . '/images/banner.jpg'
//        ));
       
        die;
        } 
    }
    $share_link = '#';
}
//end sharefacebook
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
<div class="buttonrow buttons" >
    <a class="button grey small_btn" href="<?php echo Yii::app()->request->getUrlReferrer()?>">Back</a>
</div>
<br/>
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
            'value' => CHtml::link('Share Facebook', $share_link, array('class' => 'share-facebook', 'id' => 'share-facebook')) . $fb_tmp,
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
            'value' => '<div class="job-list">'.$model->descriptions.'<div>',
        ),
        array(
            'name' => 'benefits',
            'type' => 'raw',
            'value' =>'<div class="job-list">'.$model->benefits.'<div>',
        ),
        array(
            'name' => 'experience_requirements',
            'type' => 'raw',
            'value' =>$model->experience_requirements,
        ),
//        array(
//            'name' => 'education_requirements',
//            'type' => 'raw',
//            'value' =>$model->education_requirements,
//        ),
//        'base_salary',
        'date_posted',
//        array(
//            'name' => 'incentives',
//            'type' => 'raw',
//            'value' =>$model->incentives,
//        ),
//        array(
//            'name' => 'responsibilities',
//            'type' => 'raw',
//            'value' => $model->responsibilities,
//        ),
//        array(
//            'name' => 'special_commitments',
//            'type' => 'raw',
//            'value' => $model->special_commitments,
//        ),
    ),
));
?>
<br/>
<h2>Job Appliccations</h2>
<table class="item-class">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Experience</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($employee): ?>
            <?php
            $id = 1;
            foreach ($employee as $value):

                ?>
                <tr>
                    <td><?php echo $id++; ?></td>
                    <td><?php echo $value['first_name'] . $value['last_name']; ?></td>
                    <td><?php echo  Chtml::link('Detail',CHtml::normalizeUrl(array('jobEmployees/view', 'id'=>$value['employ_id'],'type'=>'apply','job-id'=>$model->job_id))) ?></td>
                    <td><?php echo $value['experience']?></td>
                </tr>
            <?php  endforeach; ?>
        <?php else: ?>
            <tr><td  colspan="3">No results</td></tr>
<?php endif; ?>
    </tbody>    
</table>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<script>
    //sharefacebook
    status = <?php echo $status ?>;
    jQuery(function($) {
        page_id = 'me';
        $('#share-facebook').after('<span class="loadding" style="margin-left:20px;"></span>');
        $('#share-facebook').click(function() {
            page_id = $('#page_export').val();
            if(page_id != '')
           {
                    $('#share-facebook').siblings('.loadding').html('Loading...');
                    if(confirm("Are You Want Share Job On Facebook Page!") == true)
                    {
                        $.post(location.href, {status: status, page_id: page_id}, function(data) {                            
                            if (data == 'done') {
                                
                                $('#share-facebook').siblings('.loadding').html('done');
                            }
                            if(data == 'no')
                                {
                                     $('#share-facebook').siblings('.loadding').html('Try Again.');
                                }
                        });
                        
                    }
           }else
               {
                    alert('Please Select Page.');
               }
        });

    });
    
   
</script>