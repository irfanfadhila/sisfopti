<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */

$this->breadcrumbs=array(
	'Peminjaman Ruangan'=>array('index'),
	$model->id_service_request=>array('view','id'=>$model->id_service_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeminjamanRuangan', 'url'=>array('index')),
	array('label'=>'Create PeminjamanRuangan', 'url'=>array('create')),
	array('label'=>'View PeminjamanRuangan', 'url'=>array('view', 'id'=>$model->id_service_request)),
	array('label'=>'Manage PeminjamanRuangan', 'url'=>array('admin')),
);
?>

<h1>Update PeminjamanRuangan <?php echo $model->id_service_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>