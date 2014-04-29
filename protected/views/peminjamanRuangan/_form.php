<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peminjaman-ruangan-form',
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
		<?php echo $form->labelEx($model,'jumlah_peserta'); ?>
		<?php echo $form->textField($model,'jumlah_peserta'); ?>
		<?php echo $form->error($model,'jumlah_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_ruang'); ?>
		<?php echo $form->textField($model,'nama_ruang',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_pinjam'); ?>
		<?php echo $form->textField($model,'waktu_pinjam',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'waktu_pinjam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keperluan_tambahan'); ?>
		<?php echo $form->textArea($model,'keperluan_tambahan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keperluan_tambahan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->