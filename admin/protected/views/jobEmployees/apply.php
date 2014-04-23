<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h1>Manage Job Employees</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-employees-grid',
	'dataProvider'=>$model,
//	'filter'=>$model,
	'columns'=>array(
		'employ_id',
		'first_name',
		'last_name',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
    'itemsCssClass'=>'item-class',
)); ?>
