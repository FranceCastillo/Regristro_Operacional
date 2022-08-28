<?php
/* @var $this EstadoController */
/* @var $data Estado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_edo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_edo), array('view', 'id'=>$data->co_edo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_edo')); ?>:</b>
	<?php echo CHtml::encode($data->nb_edo); ?>
	<br />


</div>