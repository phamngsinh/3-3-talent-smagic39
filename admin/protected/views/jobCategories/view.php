<?php
/* @var $this JobCategoriesController */
/* @var $model JobCategories */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List JobCategories', 'url'=>array('index')),
	array('label'=>'Create JobCategories', 'url'=>array('create')),
	array('label'=>'Update JobCategories', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete JobCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCategories', 'url'=>array('admin')),
);
?>

<h1>View JobCategories #<?php echo $model->cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'cat_name',
	),
)); ?>
