<?php
/* @var $this ServerPenelitianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Server Penelitian',
);

$this->menu=array(
	array('label'=>'Create ServerPenelitian', 'url'=>array('create')),
	array('label'=>'Manage ServerPenelitian', 'url'=>array('admin')),
);
?>

<h1>Server Penelitians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
