<?php
/* @var $this ParroquiaController */
/* @var $data Parroquia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->nb_parroquia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Municipio')); ?>:</b>
	<?php echo CHtml::encode($data->coMuncp->nb_muncp); ?>
	<br />


</div>