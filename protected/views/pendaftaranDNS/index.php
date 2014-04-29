<?php
/* @var $this PendaftaranDNSController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran DNS',
);

$this->menu=array(
	array('label'=>'Create PendaftaranDNS', 'url'=>array('create')),
	array('label'=>'Manage PendaftaranDNS', 'url'=>array('admin')),
);
?>

<h1>Pendaftaran Dns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
