<?php
/* @var $this FasilitasMahasiswaFormController */
/* @var $model FasilitasMahasiswaForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Fasilitas Mahashiswa';
$this->breadcrumbs=array(
	'Fasilitas Mahasiswa',
);
?>

<h1>Fasilitas Mahasiswa</h1>

<?php if(Yii::app()->user->hasFlash('fasilitasmahasiswa')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('fasilitasmahasiswa'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fasilitas-mahasiswa-form-fasilitasmahasiswa-form',
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
		<?php echo $form->labelEx($model,'pembimbing'); ?>
		<?php echo $form->textField($model,'pembimbing'); ?>
		<?php echo $form->error($model,'pembimbing'); ?>
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

<?php endif; ?>