<?php
/* @var $this PendaftaranDNSController */
/* @var $model PendaftaranDNS */

$this->breadcrumbs=array(
	'Pendaftaran Dns'=>array('index'),
	$model->id_service_request,
);

$this->menu=array(
	array('label'=>'List PendaftaranDNS', 'url'=>array('index')),
	array('label'=>'Create PendaftaranDNS', 'url'=>array('create')),
	array('label'=>'Update PendaftaranDNS', 'url'=>array('update', 'id'=>$model->id_service_request)),
	array('label'=>'Delete PendaftaranDNS', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_service_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PendaftaranDNS', 'url'=>array('admin')),
);
?>

<h1>View PendaftaranDNS #<?php echo $model->id_service_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_service_request',
		'nama_domain',
		'pembimbing',
	),
)); ?>
