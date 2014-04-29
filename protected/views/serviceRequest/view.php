<?php
/* @var $this ServiceRequestController */
/* @var $model ServiceRequest */

$this->breadcrumbs=array(
	'Service Requests'=>array('index'),
	$model->id_service_request,
);

$this->menu=array(
	array('label'=>'List ServiceRequest', 'url'=>array('index')),
	array('label'=>'Create ServiceRequest', 'url'=>array('create')),
	array('label'=>'Update ServiceRequest', 'url'=>array('update', 'id'=>$model->id_service_request)),
	array('label'=>'Delete ServiceRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_service_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServiceRequest', 'url'=>array('admin')),
);
?>

<h1>View ServiceRequest #<?php echo $model->id_service_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_service_request',
		'tgl_mulai',
		'tgl_selesai',
		'keperluan',
	),
)); ?>
