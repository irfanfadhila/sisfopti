<?php
/* @var $this PeminjamanRuanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peminjaman Ruangan',
);

$this->menu=array(
	array('label'=>'Create PeminjamanRuangan', 'url'=>array('create')),
	array('label'=>'Manage PeminjamanRuangan', 'url'=>array('admin')),
);
?>

<h1>Peminjaman Ruangans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
