<?php
/* @var $this ServerPenelitianController */
/* @var $model ServerPenelitian */

$this->breadcrumbs=array(
	'Server Penelitian'=>array('index'),
	$model->id_service_request,
);

/*$this->menu=array(
	array('label'=>'List ServerPenelitian', 'url'=>array('index')),
	array('label'=>'Create ServerPenelitian', 'url'=>array('create')),
	array('label'=>'Update ServerPenelitian', 'url'=>array('update', 'id'=>$model->id_service_request)),
	array('label'=>'Delete ServerPenelitian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_service_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServerPenelitian', 'url'=>array('admin')),
);*/
?>

<h1>View ServerPenelitian #<?php echo $model->id_service_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_service_request',
		'size',
		'pembimbing',
	),
)); ?>
