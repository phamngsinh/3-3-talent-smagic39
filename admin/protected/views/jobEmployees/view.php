<?php
/* @var $this JobEmployeesController */
/* @var $model JobEmployees */
$this->breadcrumbs = array(
    'Job Employees' => array('index'),
    $model['employ_id'],
);

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
// get covers of employees
$covers = JobCovers::model()->findAll('employ_id=:employ', array(':employ' => $model->employ_id));
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
    ),
));
?>
<?php if ($employee): ?>
    <table class="detail-view" id="yw0">
        <tbody>

            <?php foreach ($employee as $value) : ?>
                <?php if ($type_view != 'alert'): ?>
                    <tr class="even"><th>Job title</th><td>
                            <?php echo $value['title'] ?> 
                            ||<a href="./../<?php echo $value['uri'] ?>" target="_blank">CV</a>

                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
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
                                <a href="./../<?php echo $file['uri']; ?>">Covers Attach</a>
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