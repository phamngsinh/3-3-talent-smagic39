<?php
/* @var $this JobContactusController */
/* @var $model JobContactus */

$this->breadcrumbs=array(
	'Job Contactuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobContactus', 'url'=>array('index')),
	array('label'=>'Manage JobContactus', 'url'=>array('admin')),
);
?>

<h1>Create JobContactus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>