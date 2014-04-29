<?php
/* @var $this PeminjamanRuanganFormController */
/* @var $model PeminjamanRuanganForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peminjaman-ruangan-form-peminjamanruangan-form',
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
		<?php echo $form->labelEx($model,'jumlah_peserta'); ?>
		<?php echo $form->textField($model,'jumlah_peserta'); ?>
		<?php echo $form->error($model,'jumlah_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_ruang'); ?>
		<?php echo $form->textField($model,'nama_ruang'); ?>
		<?php echo $form->error($model,'nama_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_pinjam'); ?>
		<?php echo $form->textField($model,'waktu_pinjam'); ?>
		<?php echo $form->error($model,'waktu_pinjam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keperluan_tambahan'); ?>
		<?php echo $form->textField($model,'keperluan_tambahan'); ?>
		<?php echo $form->error($model,'keperluan_tambahan'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->