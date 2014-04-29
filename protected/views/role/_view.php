<?php
/* @var $this RoleController */
/* @var $data Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->role_no), array('view', 'id'=>$data->role_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role_name')); ?>:</b>
	<?php echo CHtml::encode($data->role_name); ?>
	<br />


</div>