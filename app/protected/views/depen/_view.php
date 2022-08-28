<?php
/* @var $this DepenController */
/* @var $data Depen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_dep')); ?>:</b>
	<?php echo CHtml::encode($data->nb_dep); ?>
	<br />


</div>