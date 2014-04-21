<style>
    .helpBox{
	display:none;
    }
    fieldset{
	line-height:22px;
    }
    </style>
    
    <?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ms-form',
	'enableAjaxValidation'=>false,
	'action' => 'index.php?r=ms/prelikeSettings'
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    
<div class="row">
	    <b>Pre-like System</b><br />
	<?php 
                echo CHtml::dropDownList('PRELIKE_PAGE[value1]', Ms::model()->findByAttributes(array('var_name'=>'PRELIKE_PAGE'))->value1, 
                array('Disable' => 'Disable', 'Custom HTML' => 'Custom HTML', 'Message Overlay' => 'Message Overlay'),array("onChange"=>"toggleStatusBox()"));
                ?>	   
</div>     

    
    
     
<div class="row" style="display:none;" id="app_status_msg">
	    <b></b><br />
	    
<?php 



$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'PRELIKE_PAGE[value4_text]',
		    
                    'id'=>'PRELIKE_PAGE[value4_text]',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'PRELIKE_PAGE'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     



    
    



	<div class="row buttons">
		<?php echo CHtml::submitButton('Update',  array('class'=>'button grey small_btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>

function conf(url, msg)
{
    var cf = confirm(msg);
    
    if(cf)
	{
	    document.location = url;
	}
}


function toggleStatusBox()
{ 
    if($("#PRELIKE_PAGE_value1").val() == 'Disable')
    {
	$('#app_status_msg').slideUp();
    }
    else
    {
	$('#app_status_msg').slideDown();
    }
}


toggleStatusBox();
    
</script>