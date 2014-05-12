<?php
/* @var $this JobWorktypeController */
/* @var $model JobWorktype */

$this->breadcrumbs=array(
	'Job Worktypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobWorktype', 'url'=>array('index')),
	array('label'=>'Create JobWorktype', 'url'=>array('create')),
	array('label'=>'Update JobWorktype', 'url'=>array('update', 'id'=>$model->worktype_id)),
	array('label'=>'Delete JobWorktype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->worktype_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobWorktype', 'url'=>array('admin')),
);
?>

<h1>View JobWorktype #<?php echo $model->worktype_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'worktype_id',
		'name',
	),
)); ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jobs-grid',
    'dataProvider' => $job_list,
    'columns' => array(
        'job_id',
        'title'
    ),
    'itemsCssClass' => 'item-class',
));
?>