<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */

$this->breadcrumbs=array(
	'Peminjaman Ruangan'=>array('index'),
	$model->id_service_request,
);

/*$this->menu=array(
	array('label'=>'List PeminjamanRuangan', 'url'=>array('index')),
	array('label'=>'Create PeminjamanRuangan', 'url'=>array('create')),
	array('label'=>'Update PeminjamanRuangan', 'url'=>array('update', 'id'=>$model->id_service_request)),
	array('label'=>'Delete PeminjamanRuangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_service_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeminjamanRuangan', 'url'=>array('admin')),
);*/
?>

<h1>View PeminjamanRuangan #<?php echo $model->id_service_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$serreq,
	'attributes'=>array(
		'tgl_mulai',
		'tgl_selesai',
		'keperluan',
	),
)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_service_request',
		'jumlah_peserta',
		'nama_ruang',
		'waktu_pinjam',
		'keperluan_tambahan',
	),
)); ?>
