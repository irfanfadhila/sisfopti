<?php
/* @var $this PeminjamanRuanganController */
/* @var $model PeminjamanRuangan */

$this->breadcrumbs=array(
	'Peminjaman Ruangan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PeminjamanRuangan', 'url'=>array('index')),
	array('label'=>'Create PeminjamanRuangan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#peminjaman-ruangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Peminjaman Ruangans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'peminjaman-ruangan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_service_request',
		'jumlah_peserta',
		'nama_ruang',
		'waktu_pinjam',
		'keperluan_tambahan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
