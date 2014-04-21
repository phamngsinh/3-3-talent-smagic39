<?php
/* @var $this JobAboutController */
/* @var $model JobAbout */

$this->breadcrumbs=array(
	'Job Abouts'=>array('index'),
	$model->about_id=>array('view','id'=>$model->about_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobAbout', 'url'=>array('index')),
	array('label'=>'Create JobAbout', 'url'=>array('create')),
	array('label'=>'View JobAbout', 'url'=>array('view', 'id'=>$model->about_id)),
	array('label'=>'Manage JobAbout', 'url'=>array('admin')),
);
?>

<h1>Update JobAbout <?php echo $model->about_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>