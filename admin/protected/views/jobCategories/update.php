<?php
/* @var $this JobCategoriesController */
/* @var $model JobCategories */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobCategories', 'url'=>array('index')),
	array('label'=>'Create JobCategories', 'url'=>array('create')),
	array('label'=>'View JobCategories', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Manage JobCategories', 'url'=>array('admin')),
);
?>

<h1>Update JobCategories <?php echo $model->cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'tmp_cat_parent'=>$tmp_cat_parent,'parent'=>$parent)); ?>