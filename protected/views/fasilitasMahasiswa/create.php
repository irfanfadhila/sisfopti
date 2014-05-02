<?php
/* @var $this FasilitasMahasiswaController */
/* @var $model FasilitasMahasiswa */

$this->breadcrumbs=array(
	'Fasilitas Mahasiswa'=>array('index'),
	'Request',
);



$this->menu=array(
	array('label'=>'List FasilitasMahasiswa', 'url'=>array('index')),
	array('label'=>'Manage FasilitasMahasiswa', 'url'=>array('admin')),
);


?>


<h1>Request Fasilitas Mahasiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'serreq'=>$serreq)); ?>