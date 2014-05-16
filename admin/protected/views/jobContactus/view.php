<?php
/* @var $this JobContactusController */
/* @var $model JobContactus */

$this->breadcrumbs=array(
	'Job Contactuses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobContactus', 'url'=>array('index')),
	array('label'=>'Create JobContactus', 'url'=>array('create')),
	array('label'=>'Update JobContactus', 'url'=>array('update', 'id'=>$model->contactus_id)),
	array('label'=>'Delete JobContactus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->contactus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobContactus', 'url'=>array('admin')),
);
?>

<h1>View JobContactus #<?php echo $model->contactus_id; ?></h1>
<div class="buttonrow buttons" >
    <a class="button grey small_btn" href="<?php echo Yii::app()->request->getUrlReferrer()?>">Back</a>
</div>
<br/>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'contactus_id',
		'name',
		'phone',
		'email',
		'content',
		'date_created',
	),
)); ?>

<div class="form">
    <?php echo CHtml::beginForm();?>
    <?php echo CHtml::errorSummary($model);?>
    <?php echo  CHtml::activeHiddenField($model, 'content',array('value'=>$model->content,'name'=>'REPLY[old_content]'));?>
        <?php echo  CHtml::activeHiddenField($model, 'email',array('value'=>$model->email,'name'=>'REPLY[email]'));?>

    <div class="row">
        <label for="REPLY[content]">Reply Content</label>
          <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'name' => 'REPLY[content]',
            'id' => 'reply-content',
            'plugins' => array('safari'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'bold,italic,underline,formatselect , fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
            
        ));
        ?>
    </div>
    <div>
        <?php echo CHtml::submitButton('Send')?>
    </div>
    <?php echo CHtml::endForm();?>
</div>