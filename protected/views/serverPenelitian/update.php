<?php
/* @var $this ServerPenelitianController */
/* @var $model ServerPenelitian */

$this->breadcrumbs=array(
	'Server Penelitian'=>array('index'),
	$model->id_service_request=>array('view','id'=>$model->id_service_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List ServerPenelitian', 'url'=>array('index')),
	array('label'=>'Create ServerPenelitian', 'url'=>array('create')),
	array('label'=>'View ServerPenelitian', 'url'=>array('view', 'id'=>$model->id_service_request)),
	array('label'=>'Manage ServerPenelitian', 'url'=>array('admin')),
);
?>

<h1>Update ServerPenelitian <?php echo $model->id_service_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>