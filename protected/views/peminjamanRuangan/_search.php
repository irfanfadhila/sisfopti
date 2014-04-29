<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_service_request'); ?>
		<?php echo $form->textField($model,'id_service_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_peserta'); ?>
		<?php echo $form->textField($model,'jumlah_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_ruang'); ?>
		<?php echo $form->textField($model,'nama_ruang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_pinjam'); ?>
		<?php echo $form->textField($model,'waktu_pinjam',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keperluan_tambahan'); ?>
		<?php echo $form->textArea($model,'keperluan_tambahan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->