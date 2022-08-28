<?php
/* @var $this DependController */
/* @var $data Depend */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->id_detalle); ?>
	<br />


</div>