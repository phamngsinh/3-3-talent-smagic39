<?php
/* @var $this JobLocationController */
/* @var $model JobLocation */

$this->breadcrumbs = array(
    'Job Locations' => array('index'),
    $model->job_location_id,
);

$this->menu = array(
    array('label' => 'List JobLocation', 'url' => array('index')),
    array('label' => 'Create JobLocation', 'url' => array('create')),
    array('label' => 'Update JobLocation', 'url' => array('update', 'id' => $model->job_location_id)),
    array('label' => 'Delete JobLocation', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->job_location_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage JobLocation', 'url' => array('admin')),
);
?>

<h1>View JobLocation #<?php echo $model->job_location_id; ?></h1>
    <div class="buttonrow buttons" >
        <a class="button grey small_btn" href="<?php echo Yii::app()->request->getUrlReferrer()?>">Back</a>
    </div>
    <br/>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'job_location_id',
        'address',
        'zip',
        'country',
        'city',
        'fax_number',
        'geo',
        'map',
        'opening_hours_specification',
        'telephone',
        array(
            'label'=>'Update',
            'type'=>'raw',
            'value'=>  CHtml::link('Update',array('jobLocation/update','id'=>$model->job_location_id))
        )
    ),
));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jobs-grid',
    'dataProvider' => $job_list,
    'columns' => array(
        'job_id',
        'title'
    ),
    'itemsCssClass' => 'item-class',
));
?>