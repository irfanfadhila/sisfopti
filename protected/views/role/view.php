<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->role_no,
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'Update Role', 'url'=>array('update', 'id'=>$model->role_no)),
	array('label'=>'Delete Role', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->role_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<h1>View Role #<?php echo $model->role_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'role_no',
		'role_name',
	),
)); ?>
