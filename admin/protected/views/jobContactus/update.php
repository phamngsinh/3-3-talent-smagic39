<?php
/* @var $this JobContactusController */
/* @var $model JobContactus */

$this->breadcrumbs=array(
	'Job Contactuses'=>array('index'),
	$model->name=>array('view','id'=>$model->contactus_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobContactus', 'url'=>array('index')),
	array('label'=>'Create JobContactus', 'url'=>array('create')),
	array('label'=>'View JobContactus', 'url'=>array('view', 'id'=>$model->contactus_id)),
	array('label'=>'Manage JobContactus', 'url'=>array('admin')),
);
?>

<h1>Update JobContactus <?php echo $model->contactus_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>