<?php
/* @var $this ServerPenelitianController */
/* @var $model ServerPenelitian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'server-penelitian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'id_service_request'); ?>
		<?php echo $form->textField($model,'id_service_request'); ?>
		<?php echo $form->error($model,'id_service_request'); ?>
	</div>
-->
	<div class="row">
		 <?php echo $form->labelEx($serreq,'tgl_mulai'); ?>
	                <?php 
	                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                        'name'=>'ServiceRequest[tgl_mulai]',
	                        'id'=>'ServiceRequest_tgl_mulai',
	                        'value'=>$serreq->tgl_mulai,
	                        // additional javascript options for the date picker plugin
	                        'options'=>array(
	                                'dateFormat'=>'yy-mm-dd',
	                                'showAnim'=>'fold',
	                        ),
	                        'htmlOptions'=>array(
	                                'style'=>'height:20px;'
	                        ),
	                ));
	                ?>              
		<?php echo $form->error($serreq,'tgl_mulai'); ?>
	</div>

	<div class="row">
		 <?php echo $form->labelEx($serreq,'tgl_selesai'); ?>
	                <?php 
	                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                        'name'=>'ServiceRequest[tgl_selesai]',
	                        'id'=>'tgl_selesai',
	                        'value'=>$serreq->tgl_mulai,
	                        // additional javascript options for the date picker plugin
	                        'options'=>array(
	                                'dateFormat'=>'yy-mm-dd',
	                                'showAnim'=>'fold',
	                        ),
	                        'htmlOptions'=>array(
	                                'style'=>'height:20px;'
	                        ),
	                ));
	                ?>              
		<?php echo $form->error($serreq,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($serreq,'keperluan'); ?>
		<?php echo $form->textField($serreq,'keperluan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($serreq,'keperluan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembimbing'); ?>
		<?php echo $form->textField($model,'pembimbing',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pembimbing'); ?>
	</div>


	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($serreq,'reviewer 1'); ?></td>
			<td><?php echo CHtml::activeDropDownList($serreq, 'id_reviewer1', $serreq->getReviewer(),
			array('prompt' => '(Select reviewer)')

		); ?></td>
		</div>
	</tr>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array('name' => 'button1')); ?>
		<? echo '&nbsp;&nbsp;&nbsp;'; ?>
		<?php echo CHtml::submitButton('Save', array('name' => 'button2')); ?> 

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->