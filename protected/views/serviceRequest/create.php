<?php
/* @var $this ServiceRequestController */
/* @var $model ServiceRequest */

$this->breadcrumbs=array(
	'Service Request'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ServiceRequest', 'url'=>array('index')),
	array('label'=>'Manage ServiceRequest', 'url'=>array('admin')),
);
?>

<h1>Create ServiceRequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>