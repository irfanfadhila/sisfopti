<?php
/* @var $this PendaftaranDNSController */
/* @var $model PendaftaranDNS */

$this->breadcrumbs=array(
	'Pendaftaran DNS'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List PendaftaranDNS', 'url'=>array('index')),
	array('label'=>'Manage PendaftaranDNS', 'url'=>array('admin')),
);

*/
?>

<h1>Request Pendaftaran DNS</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'model2'=>$model2)); ?>