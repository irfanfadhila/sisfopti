<?php
/* @var $this ServerPenelitianController */
/* @var $model ServerPenelitian */

$this->breadcrumbs=array(
	'Server Penelitian'=>array('index'),
	'Request',
);
/*
$this->menu=array(
	array('label'=>'List ServerPenelitian', 'url'=>array('index')),
	array('label'=>'Manage ServerPenelitian', 'url'=>array('admin')),
);
*/
?>


<h1>Request Server Penelitian</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'serreq'=>$serreq)); ?>