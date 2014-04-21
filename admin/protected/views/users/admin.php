<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
			array(
	'header'=>'#',
	'class'=>'IndexColumn',
	),
	    
			    array(   
	    'header'=>'User',
	    'type'=>'raw',
	    'value'=>array($model,'showUserImage'),

	    ),

	    array(
	    'header'=>'Facebook ID',
	    'value'=>'$data->userid',
	    ),
	    
	    
	    
		'email',
		'nric',
		'mobile_number',
		
		//'phone_number',
	
		/*
		'country',
		'nric',
		'mobile_number',
		'landline_number',
		'timezone',
		'url',
		'visits',
		'last_login',
		'is_active',
		'userid',
		'username',
		'password',
		*/
	    
	    
		
	),
    
      
    'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
    
    
)); ?>
