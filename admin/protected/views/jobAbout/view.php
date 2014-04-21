<?php
/* @var $this JobAboutController */
/* @var $model JobAbout */

$this->breadcrumbs=array(
	'Job Abouts'=>array('index'),
	$model->about_id,
);

$this->menu=array(
	array('label'=>'List JobAbout', 'url'=>array('index')),
	array('label'=>'Create JobAbout', 'url'=>array('create')),
	array('label'=>'Update JobAbout', 'url'=>array('update', 'id'=>$model->about_id)),
	array('label'=>'Delete JobAbout', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->about_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobAbout', 'url'=>array('admin')),
);
?>

<h1>View JobAbout #<?php echo $model->about_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'about_id',
		'content',
		'date_created',
	),
)); ?>
