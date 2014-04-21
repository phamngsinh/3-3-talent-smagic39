<?php
$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Update',
);


?>

<h1>Admin Contact Us</h1>

<?php

    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
   
?>


<?php echo $this->renderPartial('_form_admin_contact_us'); ?>