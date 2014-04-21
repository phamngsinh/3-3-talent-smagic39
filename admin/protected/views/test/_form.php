<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'test-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'age'); ?>
            <?php echo $form->textField($model,'age'); ?>
            <?php echo $form->error($model,'age'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'gender'); ?>
            <?php echo $form->textField($model,'gender',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'gender'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'city'); ?>
            <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'city'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'country'); ?>
            <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'country'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'nric'); ?>
            <?php echo $form->textField($model,'nric',array('size'=>15,'maxlength'=>15)); ?>
            <?php echo $form->error($model,'nric'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'mobile_number'); ?>
            <?php echo $form->textField($model,'mobile_number',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'mobile_number'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'landline_number'); ?>
            <?php echo $form->textField($model,'landline_number',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'landline_number'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'timezone'); ?>
            <?php echo $form->textField($model,'timezone',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'timezone'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'url'); ?>
            <?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'url'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'visits'); ?>
            <?php echo $form->textField($model,'visits'); ?>
            <?php echo $form->error($model,'visits'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'last_login'); ?>
            <?php $this->widget('CJuiDateTimePicker',
						 array(
							'model'=>$model,
                                                        'name'=>'Test[last_login]',
							//'language'=> substr(Yii::app()->language,0,strpos(Yii::app()->language,'_')),
                                                        'language'=> '',
							'value'=>$model->last_login,
                                                        'mode' => 'datetime',
							'options'=>array(
                                                                        'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
                                                                        'showButtonPanel'=>true,
                                                                        'changeYear'=>true,
                                                                        'changeMonth'=>true,
                                                                        'dateFormat'=>'yy-mm-dd',
                                                                        ),
                                                    )
					);
					; ?>
            <?php echo $form->error($model,'last_login'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'is_active'); ?>
            <?php echo $form->textField($model,'is_active'); ?>
            <?php echo $form->error($model,'is_active'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'userid'); ?>
            <?php echo $form->textField($model,'userid',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'userid'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'first_name'); ?>
            <?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'first_name'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'last_name'); ?>
            <?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'last_name'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'location'); ?>
            <?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'location'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'dob'); ?>
            <?php $this->widget('CJuiDateTimePicker',
						 array(
							'model'=>$model,
                                                        'name'=>'Test[dob]',
							//'language'=> substr(Yii::app()->language,0,strpos(Yii::app()->language,'_')),
                                                        'language'=> '',
							'value'=>$model->dob,
                                                        'mode' => 'date',
							'options'=>array(
                                                                        'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
                                                                        'showButtonPanel'=>true,
                                                                        'changeYear'=>true,
                                                                        'changeMonth'=>true,
                                                                        'dateFormat'=>'yy-mm-dd',
                                                                        ),
                                                    )
					);
					; ?>
            <?php echo $form->error($model,'dob'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'title'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'role'); ?>
            <?php echo $form->textField($model,'role',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'role'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'is_internal'); ?>
            <?php echo $form->checkBox($model,'is_internal'); ?>
            <?php echo $form->error($model,'is_internal'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'full_details'); ?>
            <?php $this->widget('EMarkitupWidget', array(
                        'model' => $model,
                        'attribute' => 'full_details',
                        ));; ?>
            <?php echo $form->error($model,'full_details'); ?>
        </div>
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
</div> <!-- form -->