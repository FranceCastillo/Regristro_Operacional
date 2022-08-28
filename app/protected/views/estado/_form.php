<?php
/* @var $this EstadoController */
/* @var $model Estado */
/* @var $form CActiveForm */
?>

<div class="form otro">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
	    <?php echo $form->textField($model,'nb_edo',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Estado')); ?>
		<?php echo $form->error($model,'nb_edo'); ?>
	</div>

<br>
<br>
   
<div class="btn-group">
        <button type="reset" class="btn btn-warning">
            <span class="fa fa-eraser"></span>
            Borrar
            </button>
            </div>

        <div class="btn-group">
                <button type = "submit" class="btn btn-primary" name = "guardar">
                 <span class="fa fa-check"></span> 
             
  	 Guardar
    </button>

<?php $this->endWidget(); ?>

</div><!-- form -->