<?php
/* @var $this JobEmployeesController */
/* @var $model JobEmployees */
if (isset($_GET['job-id']) && $_GET['job-id']) {
    //Job Applications >> Job Title >> Employee Detail
    $this->breadcrumbs = array(
        'Job Applications' => array('jobEmployees/apply'),
        Jobs::model()->getJobTitle($_GET['job-id']) => array('jobs/view','id'=>$_GET['job-id']),
        'Employee Detail',
    );
} else {
    $this->breadcrumbs = array(
        'Job Employee' => array('index'),
        $model['employ_id'],
    );
}


$this->menu = array(
    array('label' => 'List JobEmployees', 'url' => array('index')),
    array('label' => 'Create JobEmployees', 'url' => array('create')),
    array('label' => 'Update JobEmployees', 'url' => array('update', 'id' => $model['employ_id'])),
    array('label' => 'Delete JobEmployees', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->employ_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage JobEmployees', 'url' => array('admin')),
);
?>

<h1>View JobEmployees #<?php echo $model['employ_id']; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'employ_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'mobile',
        'linkedin_profile',
        'experience',
    ),
));
?>

<?php if ($type_view != 'alert'): ?>
    <?php if ($employee): ?>
        <table class="detail-view" id="yw0">
            <tbody>

                <?php foreach ($employee as $value) : ?>

                    <tr class="even"><th><?php echo $title_job ?></th><td>
                            <?php echo $value['title'] ?> 
                            ||<a href="./../<?php echo $value['uri'] ?>" target="_blank">CV</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    <?php endif; ?>
<?php endif; ?>
<?php if ($covers): ?>
    <table class="detail-view" id="yw0">
        <tbody>
            <?php
            foreach ($covers as $cover) :
                if ($cover['cover_id']):
                    ?>
                    <tr class="old">
                        <th>Job Covers</th><td>
                            <?php
                            if ($cover['type'] == 'Attach'):
                                $file = Files::model()->findByPk($cover['value']);
                                ?>
                                <a href="./../<?php echo $file['uri']; ?>" target="_blank">Covers Attach</a>
                                <?php
                            else:
                                echo strip_tags($cover['value']);
                                ?>
                            <?php endif; ?></td>
                    </tr>
                <?php endif; ?> 
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>