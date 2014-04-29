<?php
/* @var $this ServerPenelitianController */
/* @var $data ServerPenelitian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_service_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_service_request), array('view', 'id'=>$data->id_service_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembimbing')); ?>:</b>
	<?php echo CHtml::encode($data->pembimbing); ?>
	<br />


</div>