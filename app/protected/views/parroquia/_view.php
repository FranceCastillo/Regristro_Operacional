<?php
/* @var $this ParroquiaController */
/* @var $data Parroquia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_parroquia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_parroquia), array('view', 'id'=>$data->co_parroquia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->nb_parroquia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_muncp')); ?>:</b>
	<?php echo CHtml::encode($data->co_muncp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muncp')); ?>:</b>
	<?php echo CHtml::encode($data->muncp); ?>
	<br />


</div>