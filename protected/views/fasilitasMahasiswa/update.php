<?php
/* @var $this FasilitasMahasiswaController */
/* @var $model FasilitasMahasiswa */

$this->breadcrumbs=array(
	'Fasilitas Mahasiswa'=>array('index'),
	$model->id_service_request=>array('view','id'=>$model->id_service_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List FasilitasMahasiswa', 'url'=>array('index')),
	array('label'=>'Create FasilitasMahasiswa', 'url'=>array('create')),
	array('label'=>'View FasilitasMahasiswa', 'url'=>array('view', 'id'=>$model->id_service_request)),
	array('label'=>'Manage FasilitasMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Update FasilitasMahasiswa <?php echo $model->id_service_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>