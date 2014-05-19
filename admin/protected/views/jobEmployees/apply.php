<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#job-employees-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});

");
?>

<h1>Manage <?php echo $type ?></h1>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif;?>
<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->
<?php


if($type_view=== 'alert'):
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'job-employees-grid',
        'filter'=> $model,
        'dataProvider'=> $model->search_alert(),
        'columns' => array(
            'employ_id',
            'first_name',
            'last_name',
            'email',
            array(
                'value' => 'CHtml::link("<img src=\"images/view.png\" alt=\"View\">", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")))',
                'type' => 'raw',
            ),
            array(
                'class' => 'CButtonColumn',
                'template' => '{update}{delete}'
            ),
        ),
        'itemsCssClass' => 'item-class',
    ));
endif;




if($type_view=== 'apply'):
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'job-employees-grid',
        'filter'=> $model,
        'dataProvider'=> $model->search_apply(),
        'columns' => array(
            array(
                'value' => '$data->employ_id',
                'type' => 'raw',
                'name'=>'employ_id',
            ),
            'first_name',
            'last_name',
            array(
                'name'=>'email',
                'type'=>'raw',
                'value'=> 'CHtml::link("$data->email", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")),array("alt"=>"send email"))',
            ),
            array(
                'value' => 'CHtml::link("<img src=\"images/view.png\" alt=\"View\">", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")))',
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
endif;

if($type_view === 'regcv'):
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'job-employees-grid',
        'filter'=> $model,
        'dataProvider'=> $model->search_regCv(),
        'columns' => array(
            'employ_id',
            'first_name',
            'last_name',
            array(
                'name'=>'employ_id',
                'type'=>'raw',
                'value'=>'JobResumes::model()->getCategory($data->employ_id,"1")',
                'filter'=>false,
                'header'=>'Category'
            ),
            array(
                'name'=>'employ_id',
                'type'=>'raw',
                'value'=>'JobResumes::model()->getCategory($data->employ_id,"2")',
                'filter'=>false,
                'header'=>'SubCategory'

            ),
            array(
            'name'=>'email',
            'type'=>'raw',
            'value'=> 'CHtml::link("$data->email", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")),array("alt"=>"send email"))',
            ),
            array(
                'value' => 'CHtml::link("<img src=\"images/view.png\" alt=\"View\">", Yii::app()->createUrl("jobEmployees/view&id=$data->primaryKey",array("type"=>"' . $type_view . '")))',
                'type' => 'raw',
            )
        ,
            array(
                'class' => 'CButtonColumn',
                'template' => '{delete}'
            ),
        ),
        'itemsCssClass' => 'item-class',
    ));
endif;
?>

