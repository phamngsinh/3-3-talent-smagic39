<?php
/* @var $this JobSubcategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Subcategories',
);

$this->menu=array(
	array('label'=>'Create JobSubcategories', 'url'=>array('create')),
	array('label'=>'Manage JobSubcategories', 'url'=>array('admin')),
);
?>

<h1>Job Subcategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
