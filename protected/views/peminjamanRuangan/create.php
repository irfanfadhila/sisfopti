<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */

$this->breadcrumbs=array(
	'Peminjaman Ruangan'=>array('index'),
	'Request',
);

/*
$this->menu=array(
	array('label'=>'List PeminjamanRuangan', 'url'=>array('index')),
	array('label'=>'Manage PeminjamanRuangan', 'url'=>array('admin')),
);

*/
?>

<h1>Request Peminjaman Ruangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'model2'=>$model2)); ?>