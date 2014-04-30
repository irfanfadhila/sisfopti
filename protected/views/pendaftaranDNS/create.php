<?php
/* @var $this PendaftaranDNSController */
/* @var $model PendaftaranDNS */

$this->breadcrumbs=array(
	'Pendaftaran Dns'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List PendaftaranDNS', 'url'=>array('index')),
	array('label'=>'Manage PendaftaranDNS', 'url'=>array('admin')),
);

*/
?>

<h1>Create PendaftaranDNS</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'serreq'=>$serreq)); ?>