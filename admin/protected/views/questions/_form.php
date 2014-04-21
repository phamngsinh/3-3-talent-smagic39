<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
	'id' => 'questions-form',
	'enableAjaxValidation' => false,
	    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message)
    {
	echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
    ?>


	


    <div class="row">
<?php echo $form->labelEx($model, 'question'); ?>
<?php echo $form->textArea($model, 'question', array('rows' => 6, 'cols' => 50)); ?>
    <?php echo $form->error($model, 'question'); ?>
    </div>

        <div class="row">
<?php echo $form->labelEx($model, 'visual'); ?>
<?php 
                echo CHtml::dropDownList('Questions[visual]', $model->visual, 
                array(
		'Dog'=>'Dog',
		'Cat'=>'Cat',
		

		    ), array('empty'=>'---select---'));
                ?>
    <?php echo $form->error($model, 'visual'); ?>
    </div>

<?php
if (!$model->isNewRecord)
{
    ?>


        <table border="1" width="1" style="width:600px;">
    	<tr><td>#</td><td><b>Option</b></td><td><b>Score</b></td><td><b>Delete</b></td></tr>

	    <?php
	    $options = Options::model()->findAllByAttributes(array('question_id' => $model->id));

	    $i = 1;
	    foreach ($options as $option)
	    {
		
		?>

		<tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo CHtml::textField('Options' . $i . '[option]', $option->option, array('size' => 60)); ?></td>

		    <td><?php echo CHtml::textField('Options' . $i . '[Score]', $option->score, array('size' => 10)); ?></td><td><a href="index.php?r=questions/update&id=<?php echo $model->id; ?>&delid=<?php echo $option->id; ?>" >Delete</a></td></tr>
		<?php
		$i++;
	    }
	    ?>


    	<tr style="background-color:#D1D8E7">
    	    <td></td>
    	    <td><b>Add New Option</b></td>

    	    <td></td>
	    <td></td>
	
	</tr>

    	<tr>
    	    <td><?php echo $i; ?></td>
    	    <td><?php echo CHtml::textField('OptionsNew', '', array('size' => 60)); ?></td>

    	    <td><?php echo CHtml::textField('ScoreNew', '', array('size' => 10)); ?></td>
    	    <td></td>
    	</tr>

        </table>

    <?php }   ?>

    <?php echo CHtml::hiddenField('nowAnswer', @Options::model()->findByAttributes(array("question_id"=>$model->id,"is_correct"=>1))->id); ?>
    

    <div class="row buttons">
	<?php echo CHtml::submitButton($model->isNewRecord ? '   Proceed >>  ' : '   Save   '); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->