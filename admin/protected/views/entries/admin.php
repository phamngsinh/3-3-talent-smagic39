<?php
$this->breadcrumbs=array(
	'Entries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Entries', 'url'=>array('index')),
	array('label'=>'Create Entries', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('entries-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Entries</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entries-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
	    
	        
	array(
	'header'=>'#',
	'class'=>'IndexColumn',
	),
		 
	    
	    array(   
	    'header'=>'Send By',
	    'type'=>'raw',
	    'value'=>array($model,'showUserImage'),

	    ),
		
		array(   
	    'header'=>'Recieved By',
	    'type'=>'raw',
	    'value'=>array($model,'showRecieverImage'),

	    ),
	    
	   
	    
	    /*array(   
	    'header'=>'Photo',
	    'type'=>'raw',
	    'value'=>array($model,'showEntryPhoto'),

	    ),*/
	    
	    /*array(   
	    'header'=>'Selected Friends',
	    'type'=>'raw',
	    'value'=>array($model,'getFriends'),

	    ),*/
	    
	    
	    
	    array(   
	    'header'=>'Message',
	    'type'=>'raw',
	    'value'=>'substr($data->details."...", 0,80)',

	    ),
		
		array(   
	    'header'=>'Scoop',
	    'type'=>'raw',
	    'value'=>array($model,'showFlavourImage'),

	    ),
	    
	    
	
	    'date',
	    //'total_votes',
	    
		/*
		
		'is_active',
		
		
		'total_comments',
		'total_downloads',
		'is_deleted',
		'display_order',
		'category',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {delete}'
		),
	),
	 'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
)); ?>
