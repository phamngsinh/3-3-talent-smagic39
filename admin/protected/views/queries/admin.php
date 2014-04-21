<?php
$this->breadcrumbs=array(
	'Queries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Queries', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('queries-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Queries</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'queries-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	    
	    
		 array(
                        'header'=>'#',
            'class'=>'IndexColumn',
                ),
	    
		    
	    'date',
		
		'ip_address',
		
		'name',
	    
	    //'nric',
	    'email_address',
	    
	    'contact_number',
	    
		'city_country',
	
	    
		'comments',
	    
	    
		/*
		'date',
		'ip_address',
		'is_read',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {delete}',
		),
	    
		
	),
    
    'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
    
    
)); ?>
