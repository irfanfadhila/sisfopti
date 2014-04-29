<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->role_no=>array('view','id'=>$model->role_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'View Role', 'url'=>array('view', 'id'=>$model->role_no)),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<h1>Update Role <?php echo $model->role_no; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>