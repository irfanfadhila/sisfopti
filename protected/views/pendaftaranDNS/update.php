<?php
/* @var $this PendaftaranDNSController */
/* @var $model PendaftaranDNS */

$this->breadcrumbs=array(
	'Pendaftaran Dns'=>array('index'),
	$model->id_service_request=>array('view','id'=>$model->id_service_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List PendaftaranDNS', 'url'=>array('index')),
	array('label'=>'Create PendaftaranDNS', 'url'=>array('create')),
	array('label'=>'View PendaftaranDNS', 'url'=>array('view', 'id'=>$model->id_service_request)),
	array('label'=>'Manage PendaftaranDNS', 'url'=>array('admin')),
);
?>

<h1>Update PendaftaranDNS <?php echo $model->id_service_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'serreq'=>$serreq)); ?>