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
		<?php echo $form->labelEx($model2,'tgl_mulai'); ?>
		<?php echo $form->textField($model2,'tgl_mulai',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model2,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'tgl_selesai'); ?>
		<?php echo $form->textField($model2,'tgl_selesai',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model2,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'keperluan'); ?>
		<?php echo $form->textField($model2,'keperluan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model2,'keperluan'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->