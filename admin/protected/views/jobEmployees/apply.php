<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<h1>Manage <?php echo $type ?></h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'job-employees-grid',
    'dataProvider' => $model,
    'columns' => array(
        'employ_id',
        'first_name',
        'last_name',
        'email',
        array(
            'value' => 'CHtml::link("<img src=\"/admin/images/view.png\" alt=\"View\">", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")))',
            'type' => 'raw',
        )
        ,
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}'
        ),
    ),
    'itemsCssClass' => 'item-class',
));
?>
