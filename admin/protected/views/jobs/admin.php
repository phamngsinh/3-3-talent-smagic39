<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs = array(
    'Jobs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Jobs', 'url' => array('index')),
    array('label' => 'Create Jobs', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jobs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Employees</h1>
<div class="buttonrow buttons" style="float:right;">
<?php echo CHtml::link('Add Job',array('Jobs/create'),array('class'=>'button grey small_btn'))?>
    </div>
<br/>
<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jobs-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'value' => '$data->job_id',
        ),
        array(
            'name' => 'title',
            'type' => 'raw',
            'value' => 'CHtml::link($data->title, Yii::app()->createUrl("jobs/view",array("id"=>$data->job_id)))'
        ),
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'header' => 'No of Applications',
            'value' => 'JobResumes::Model()->getAppliccation($data->job_id)',
        ),
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'header' => 'Lastest of Application',
            'value' => 'JobResumes::Model()->getLastestApplication($data->job_id)',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
    'itemsCssClass' => 'item-class',
));
?>
