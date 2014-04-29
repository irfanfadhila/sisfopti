<?php
/* @var $this ServiceRequestController */
/* @var $data ServiceRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_service_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_service_request), array('view', 'id'=>$data->id_service_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keperluan')); ?>:</b>
	<?php echo CHtml::encode($data->keperluan); ?>
	<br />


</div>