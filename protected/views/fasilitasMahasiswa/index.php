<?php
/* @var $this FasilitasMahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fasilitas Mahasiswa',
);

$this->menu=array(
	array('label'=>'Create FasilitasMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage FasilitasMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Fasilitas Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
