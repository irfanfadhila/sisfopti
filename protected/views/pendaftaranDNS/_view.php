<?php
/* @var $this PendaftaranDNSController */
/* @var $data PendaftaranDNS */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_service_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_service_request), array('view', 'id'=>$data->id_service_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_domain')); ?>:</b>
	<?php echo CHtml::encode($data->nama_domain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembimbing')); ?>:</b>
	<?php echo CHtml::encode($data->pembimbing); ?>
	<br />


</div>