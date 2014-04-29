<?php
/* @var $this FasilitasMahasiswaController */
/* @var $data FasilitasMahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_service_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_service_request), array('view', 'id'=>$data->id_service_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keperluan_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->keperluan_tambahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembimbing')); ?>:</b>
	<?php echo CHtml::encode($data->pembimbing); ?>
	<br />


</div>