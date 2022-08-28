<?php
/* @var $this UnidadesController */
/* @var $model Unidades */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_unid'); ?>
		<?php echo $form->textField($model,'nb_unid',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_unid'); ?>
		<?php echo $form->textField($model,'direccion_unid',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coor_unid'); ?>
		<?php echo $form->textField($model,'coor_unid',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_depen'); ?>
		<?php echo $form->textField($model,'id_depen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_personal'); ?>
		<?php echo $form->textField($model,'id_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_unid'); ?>
		<?php echo $form->textField($model,'tipo_unid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_edo_uni'); ?>
		<?php echo $form->textField($model,'co_edo_uni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ciudad_uni'); ?>
		<?php echo $form->textField($model,'co_ciudad_uni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_muncp_uni'); ?>
		<?php echo $form->textField($model,'co_muncp_uni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_parroquia_uni'); ?>
		<?php echo $form->textField($model,'co_parroquia_uni'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->