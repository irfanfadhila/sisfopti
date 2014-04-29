<?php
/* @var $this PendaftaranDNSFormController */
/* @var $model PendaftaranDNSForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-dnsform-pendaftarandns-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_service_request'); ?>
		<?php echo $form->textField($model,'id_service_request'); ?>
		<?php echo $form->error($model,'id_service_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_domain'); ?>
		<?php echo $form->textField($model,'nama_domain'); ?>
		<?php echo $form->error($model,'nama_domain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembimbing'); ?>
		<?php echo $form->textField($model,'pembimbing'); ?>
		<?php echo $form->error($model,'pembimbing'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

