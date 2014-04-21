<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);



?>

<h1>Manage Admin Panel Users</h1>



<?php 

$nowUser = @AdminUsers::model()->findByPk((int)$_REQUEST['id']);


if(Yii::app()->user->getFlash('userUpdated'))
{
    echo '<div class="flash-success">User <b>'.$nowUser->username.'</b> updated successfully.</div>';
}



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
			array(
	'header'=>'#',
	'class'=>'IndexColumn',
	),
	    
	
		'name',
		
	    
		'email',
		'username',
		'role',
		'visits',
		
		
	    array(
		'name'=>'last_login',
		'value'=>'date("d-m-Y h:m A",strtotime($data->last_login))',
		
            ),
	    
		array(
		'name'=>'is_active',
		    'type'=>'raw',
		'value'=>'($data->is_active==1)?"<span style=\'background-color:green; padding:3px;color:#FFF;\'>Yes</span>":"<span style=\'background-color:red; padding:3px;color:#FFF\'>No</span>"'
            ),
	    
	    array(
			'class'=>'CButtonColumn',
		    'template'=>'{delete} {update} ',
			
		),
	    
		
	),
    
	'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'

    
)); ?>
