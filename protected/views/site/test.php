<p id="update_info">&nbsp;</p>
<div id="div_com_form" class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validateOnType'=>false),
)); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="com_p">
            <?php echo $form->labelEx($model,'author'); ?>
            <?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'author'); ?>
        </div>
        <div class="com_p">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
        <div class="com_p">
            <?php echo $form->labelEx($model,'url'); ?>
            <?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'url'); ?>
        </div>
        <div class="com_p">
            <?php echo $form->labelEx($model,'content'); ?>
            <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'content'); ?>
            <span class="hint">You may use <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown syntax</a>.</span>
        </div>
        <?php if(extension_loaded('gd')&&Yii::app()->user->isGuest): ?>
        <div id="kaptcha" class="com_p">
                <?php echo $form->labelEx($model,'verifyCode'); $this->widget('CCaptcha'); 
                echo $form->textField($model,'verifyCode');
                echo $form->error($model,'verifyCode'); ?>
                <p class="hint">Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive.</p>
        </div>
        <?php endif; ?>
        <div id="com_sub" class="com_p">
                <?php echo  CHtml::ajaxSubmitButton(
                                $model->isNewRecord ? 'Submit' : 'Save',
                                CHtml::normalizeUrl(array('post/ajaxComment','id'=>$post->id)),
                                array(
                                    'beforeSend'=>'function(){
                                        $("#update_info").replaceWith("<p id=\"update_info\">sending...</p>");
                                    }',
                                    'success'=>'function(data){
                                        if(data=="sent"){
                                            $("#div_com_form").hide();
                                            $("#update_info").replaceWith("<p id=\"update_info\">Comment Sent</p>");
                                        }else if(data=="fail"){
                                            $("#div_com_form").hide();
                                            $("#update_info").replaceWith("<p id=\"update_info\">An error occured</p>");
                                        }else{
                                            $("#update_info").replaceWith("<p id=\"update_info\">&nbsp;</p>");
                                            if(data.search("Comment cannot be blank.")!=-1){
                                                $("#Comment_content_em_").replaceWith("<div id=\"Comment_content_em_\" class=\"errorMessage\" style=\"\">Comment cannot be blank.</div>");
                                            }
                                            if(data.search("Name cannot be blank.")!=-1){
                                                $("#Comment_author_em_").replaceWith("<div id=\"Comment_author_em_\" class=\"errorMessage\" style=\"\">Name cannot be blank.</div>");
                                            }
                                            if(data.search("Email cannot be blank.")!=-1){
                                                $("#Comment_email_em_").replaceWith("<div id=\"Comment_email_em_\" class=\"errorMessage\" style=\"\">Email cannot be blank.</div>");
                                            }
                                            if(data.search("Email is not a valid email address.")!=-1){
                                                $("#Comment_email_em_").replaceWith("<div id=\"Comment_email_em_\" class=\"errorMessage\" style=\"\">Email is not a valid email address.</div>");
                                            }
                                            if(data.search("The verification code is incorrect.")!=-1){
                                                $("#Comment_verifyCode_em_").replaceWith("<div id=\"Comment_verifyCode_em_\" class=\"errorMessage\" style=\"\">The verification code is incorrect.</div>");
                                            }
                                        }
                                    }',
                                )
                            ); ?>
        </div>
<?php $this->endWidget(); ?>
</div>