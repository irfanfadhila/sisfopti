<?php
/* @var $this ServiceRequestController */
/* @var $model ServiceRequest */

$this->breadcrumbs=array(
	'Service Request'=>array('index'),
	$model->id_service_request=>array('view','id'=>$model->id_service_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List ServiceRequest', 'url'=>array('index')),
	array('label'=>'Create ServiceRequest', 'url'=>array('create')),
	array('label'=>'View ServiceRequest', 'url'=>array('view', 'id'=>$model->id_service_request)),
	array('label'=>'Manage ServiceRequest', 'url'=>array('admin')),
);
?>

<h1>Update ServiceRequest <?php echo $model->id_service_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>