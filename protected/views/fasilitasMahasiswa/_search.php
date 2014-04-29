<?php
/* @var $this FasilitasMahasiswaController */
/* @var $model FasilitasMahasiswa */
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
		<?php echo $form->label($model,'keperluan_tambahan'); ?>
		<?php echo $form->textArea($model,'keperluan_tambahan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembimbing'); ?>
		<?php echo $form->textField($model,'pembimbing',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->