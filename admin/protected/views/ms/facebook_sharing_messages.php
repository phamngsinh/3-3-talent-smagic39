<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Update',
);


?>

<h1>Facebook Sharing Messages (<?php echo $_REQUEST['name']; ?>)</h1>

<?php

    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
   
?>


<?php echo $this->renderPartial('_form_facebook_sharing_messages'); ?>