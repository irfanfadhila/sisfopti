<?php
/* @var $this FasilitasMahasiswaController */
/* @var $model FasilitasMahasiswa */

$this->breadcrumbs=array(
	'Fasilitas Mahasiswa'=>array('index'),
	$model->id_service_request,
);

/*$this->menu=array(
	array('label'=>'List FasilitasMahasiswa', 'url'=>array('index')),
	array('label'=>'Create FasilitasMahasiswa', 'url'=>array('create')),
	array('label'=>'Update FasilitasMahasiswa', 'url'=>array('update', 'id'=>$model->id_service_request)),
	array('label'=>'Delete FasilitasMahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_service_request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FasilitasMahasiswa', 'url'=>array('admin')),
);*/
?>

<h1>View FasilitasMahasiswa #<?php echo $model->id_service_request; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_service_request',
		'keperluan_tambahan',
		'pembimbing',
	),
)); ?>
