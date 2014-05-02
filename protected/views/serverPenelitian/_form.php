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
<table>
<tr>
	<div class="row">
		 <td><?php echo $form->labelEx($serreq,'tgl_mulai'); ?></td>
	              <td>  <?php 
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
	                ?>              </td>
		<td><?php echo $form->error($serreq,'tgl_mulai'); ?></td>
	</div>
</tr>
<tr>
	<div class="row">
		 <td><?php echo $form->labelEx($serreq,'tgl_selesai'); ?></td>
	               <td> <?php 
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
	                ?>              </td>
		<td><?php echo $form->error($serreq,'tgl_selesai'); ?></td>
	</div>
</tr>
<tr>
	<div class="row">
		<td><?php echo $form->labelEx($serreq,'keperluan'); ?></td>
		<td><?php echo $form->textArea($serreq,'keperluan',array('rows'=>6, 'cols'=>50)); ?></td>
		<td><?php echo $form->error($serreq,'keperluan'); ?></td>
	</div>
</tr>
<tr>
	<div class="row">
		
		<tr colspan ="3">
			<td><?php echo $form->labelEx($model,'size'); ?></td>
			<td><?php echo $form->textField($model,'size',array('size'=>13,'maxlength'=>20)); ?>
			<!-- <?php echo $form->dropDownList($model,'size',array("Mb","Kb"),array('empty'=>'Select Value')); ?> -->
			</td>
		</tr>
		<td><?php echo $form->error($model,'size'); ?></td>
	</div>
</tr>
<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'pembimbing'); ?></td>
		<td><?php echo $form->textField($model,'pembimbing',array('size'=>30,'maxlength'=>30)); ?></td>
		<td><?php echo $form->error($model,'pembimbing'); ?></td>
	</div>
</tr>

	<tr>
		<div class="row">
			<td><?php echo $form->labelEx($serreq,'reviewer 1'); ?></td>
			<td><?php echo CHtml::activeDropDownList($serreq, 'id_reviewer1', $serreq->getReviewer(),
			array('prompt' => '(Select reviewer)')

		); ?></td>
		</div>
	</tr>
	<tr>
	<div class="row buttons">
		<td><?php echo CHtml::submitButton('Submit', array('name' => 'button1')); ?>
		<? echo '&nbsp;&nbsp;&nbsp;'; ?>
		<?php echo CHtml::submitButton('Save', array('name' => 'button2')); ?></td> 

	</div>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->