<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
   
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-login.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
 


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nu_docm_idnt',array('size'=>8, 'placeholder'=>'Cedula')); ?>
		<?php echo $form->error($model,'nu_docm_idnt'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->dropDownList($model,'username',array('invitado'=>'invitado', 'admin'=>'admin', 'placeholder'=>'Usuario'),
			array(
				'prompt'=>'Usuario'
				)
		); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Nombre')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Apellido')); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('M'=>'Masculino','F'=>'Femenino'),
			array(
				'prompt'=>'Sexo'
				)
		); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>


	
	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Correo Electronico')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nu_tlf_local',array('size'=>15,'maxlength'=>15, 'placeholder'=>'Telefono Local')); ?>
		<?php echo $form->error($model,'nu_tlf_local'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nu_tlf_cel',array('size'=>15,'maxlength'=>15, 'placeholder'=>'Telefono Celular')); ?>
		<?php echo $form->error($model,'nu_tlf_cel'); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->dropDownList($model,'id_grado', CHtml::listData(Grados::model()->findAll(), 'id', 'nb_grados'),		
			array(
              'ajax' => array(
              		'title'=>'Seleccione Grado',
                    ),'prompt' => 'Seleccione Grado'
              )
        ); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->dropDownList($model,'id_cargo', CHtml::listData(Cargos::model()->findAll(), 'id', 'nb_cargos'),		
			array(
              'ajax' => array(
              		'title'=>'Seleccione Cargo',
                    ),'prompt' => 'Seleccione Cargo'
              )
        ); ?>
		<?php echo $form->error($model,'id'); ?>
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
                <button type = "submit" class="btn btn-primary" name = "entrar">
                 <span class="fa fa-check"></span> 
             
        Crear
    </button>
	  

<?php $this->endWidget(); ?>

</div><!-- form -->