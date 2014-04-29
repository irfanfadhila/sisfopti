<?php
/* @var $this PeminjamanRuanganController */
/* @var $data PeminjamanRuangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_service_request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_service_request), array('view', 'id'=>$data->id_service_request)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_peserta')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_peserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ruang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ruang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_pinjam')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_pinjam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keperluan_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->keperluan_tambahan); ?>
	<br />


</div>