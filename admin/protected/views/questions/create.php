<?php
$this->breadcrumbs=array(
	'Questions'=>array('admin'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Manage Questions', 'url'=>array('admin')),
);
?>

<h1>Add Questions</h1>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>