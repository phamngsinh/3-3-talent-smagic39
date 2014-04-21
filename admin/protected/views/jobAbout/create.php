<?php
/* @var $this JobAboutController */
/* @var $model JobAbout */

$this->breadcrumbs=array(
	'Job Abouts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobAbout', 'url'=>array('index')),
	array('label'=>'Manage JobAbout', 'url'=>array('admin')),
);
?>

<h1>Create JobAbout</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>