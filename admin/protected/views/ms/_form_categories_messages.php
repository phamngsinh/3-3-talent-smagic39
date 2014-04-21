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
	'action' => 'index.php?r=ms/CategoriesMessages'
)); ?>
    <style> .row{padding-top: 10px;} </style>

    
    

    
     
<div class="row">
	    <b>The Experts.  The Guru</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_EP[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_EP',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_EP'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     



<div class="row">
	    <b>The Leash-holder</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_LH[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_LH',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_LH'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     

    
    
<div class="row">
	    <b>The Pet-Pleaser. The Joy-Seeker</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_PP[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_PP',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_PP'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     

    
    
    
<div class="row">
	    <b>The Free-Spirit</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_FS[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_FS',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_FS'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     

    
    
    
<div class="row">
	    <b>The Provider. The Care-taker</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_TP[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_TP',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_TP'))->value4_text), 
                 ));
             ?>
	    
	    

<br /><br />
</div>     

    
    
<div class="row">
	    <b>The Easy-Going Master</b><br />
	    
<?php 


$this->widget('application.extensions.tinymce.ETinyMce',
                array(
                    'name'=>'CATEGORIES_MESSAGES_EM[value4_text]',
		    
                    'id'=>'CATEGORIES_MESSAGES_EM',
                    'plugins' => array('filemanager','imagemanager','safari','pagebreak','style','layer','table','save','advhr','advimage','advlink','emotions','iespell','inlinepopups','insertdatetime','preview','media','searchreplace','print','contextmenu','paste','directionality','fullscreen','noneditable','visualchars','nonbreaking','xhtmlxtras','template'),
                    'options' => array(
			'theme_advanced_toolbar_location'=>'top',
                        'theme' => 'advanced',
                        'skin' => 'o2k7',
                        'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,image,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                        'theme_advanced_buttons2' => '',
                        'theme_advanced_buttons3' => '',
                    ),
		    
		    'width'=>'400px;',
		    'height'=>'200px;',
		    
                    'value' => @CHtml::decode(Ms::model()->findByAttributes(array('var_name'=>'CATEGORIES_MESSAGES_EM'))->value4_text), 
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


</script>