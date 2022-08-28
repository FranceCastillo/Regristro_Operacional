<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="form otro">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'ciudad-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>



   <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php echo $form->dropDownList($model,'estado', CHtml::listData(Estado::model()->findAll(), 'id', 'nb_edo'),      
            array (
                'prompt'=>'Seleccione Estado' 
                )
        ); ?>
        <?php echo $form->error($model,'estado'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php echo $form->textField($model,'nb_ciudad',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Ciudad')); ?>
        <?php echo $form->error($model,'nb_ciudad'); ?>
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