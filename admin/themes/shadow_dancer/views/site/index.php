<?php  



?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Dashboard</h1>


<!--
<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div>
<div class="flash-success">This is an example of a success message to show you that things have gone according to plan.</div>
<div class="span-23 showgrid">
-->
   

<?php




//$auth=Yii::app()->authManager;
//echo Yii::app()->user->checkAccess('admin');


//echo Yii::app()->user->role;

//echo Yii::app()->user->isGuest;

$fbId = @CHtml::encode(Ms::model()->findByAttributes(array('var_name'=>'FACEBOOK_KEYS'))->value4_text);

$data = @file_get_contents("https://graph.facebook.com/".$fbId);



$jsonData = json_decode($data);


if($jsonData){

?>

<br /><br />


<table width='1' border='1' cellspacing='0' cellpadding='0'  >
    <tr><td style="vertical-align: top;" width="1"><img src="http://static.ak.fbcdn.net/rsrc.php/v2/y_/r/9myDd8iyu0B.gif" width="100" /></td><td>
	    
	    <table width='100%' border='1' cellspacing='0' cellpadding='0' >
		<tr><td><h3 style="margin: 0px;"><a href="<?php echo @$jsonData->link; ?>" target="_blank" ><?php echo $jsonData->name; ?></h3></a></td></tr>
		<tr><td>Daily Active Users : <?php echo @$jsonData->daily_active_users; ?></td></tr>
		<tr><td>Weekly Active Users : <?php echo @$jsonData->weekly_active_users; ?></td></tr>
		<tr><td>Monthly Active Users : <?php echo @$jsonData->monthly_active_users; ?></td></tr>
	    </table>
	    
	    
	</td></tr>
    
</table>

<?php } ?>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br />

                




</div>