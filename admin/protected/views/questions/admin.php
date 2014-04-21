<?php
$this->breadcrumbs=array(
	'Questions'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add Questions', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('questions-grid', {
		data: $(this).serialize()
	});
	return false;
});
");


?>

<h1>Manage Questions</h1>



<style>
    .listings li
    {
	padding:2px;
    }
        .listings ul
    {
	margin-top:3px;
    }
</style>

<?php




$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'questions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	
	array(
	'header'=>'#',
	'class'=>'IndexColumn',
	),
	    
		
			    	array(   
	'header'=>'Questions',
	'type'=>'raw',
	'value'=>array($model,'showQuestions'),
	'htmlOptions'=>array('width'=>'80%'),

	),
	    
	    'difficulty_level',
	    
		array(
			'class'=>'CButtonColumn',
		    'template'=>'{update} &nbsp; {delete}',
		    'buttons'=>array
    (
        'update' => array
        (
            'label'=>'Update',
            'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
            'url'=>'Yii::app()->createUrl("questions/update", array("id"=>$data->id))',
        ),
        
    ),
		    
		),
	),
    
    'loadingCssClass'=>'loading-class',
	'itemsCssClass'=>'item-class'
    
    
)); ?>
