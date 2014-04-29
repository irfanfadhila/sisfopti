<?php
/* @var $this PendaftaranDNSController */
/* @var $model PendaftaranDNS */
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
		<?php echo $form->label($model,'nama_domain'); ?>
		<?php echo $form->textField($model,'nama_domain',array('size'=>50,'maxlength'=>50)); ?>
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