<?php
$this->breadcrumbs=array(
	'Questions'=>array('admin'),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Add Questions', 'url'=>array('create')),
	
	array('label'=>'Manage Questions', 'url'=>array('admin',)),
);
?>

<h1>Update Question</h1>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>