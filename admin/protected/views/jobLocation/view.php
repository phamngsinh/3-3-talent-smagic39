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
    ),
));
?>
