<?php
/* @var $this JobCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Categories',
);

$this->menu=array(
	array('label'=>'Create JobCategories', 'url'=>array('create')),
	array('label'=>'Manage JobCategories', 'url'=>array('admin')),
);
?>

<h1>Job Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
