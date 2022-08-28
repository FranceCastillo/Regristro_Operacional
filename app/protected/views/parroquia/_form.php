<?php
/* @var $this ParroquiaController */
/* @var $model Parroquia */
/* @var $form CActiveForm */
?>

<div class="form otro3">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parroquia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	     
    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php $vEstado = new CDbCriteria;
              $vEstado->order = 'nb_edo ASC';
              echo $form->dropDownList($model,'estado', CHtml::listData(Estado::model()->findAll($vEstado), 'co_edo','nb_edo'),
                                    array('ajax' => array('type' => 'POST',
                                                        'url' => CController::createUrl('Unidades/SelectCiudad'),
                                                        'update' => '#Parroquia_estado'
                                                          ),'prompt' => 'Seleccione...'
                                        )
                                    );  ?>
        <?php echo $form->error($model,'estado'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php   if ($model->isNewRecord==1){
                    echo $form->dropDownList($model,'ciudad', array('0' => 'Seleccione Ciudad'),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectMunicipio'),
                                                                    'update' => '#Parroquia_ciudad'
                                                                    )
                                                                )
                                    );
                } else {
                                        
                    $sql="select count(co_ciudad)count from ciudad where co_edo = '$model->estado';";
                    $connection=Yii::app()->db;
                    $command=$connection->createCommand($sql);
                    $row=$command->queryRow();
                    $bandera=$row['count'];

                    if ($bandera==0) {
                        echo $form->dropDownList($model,'ciudad', array('0' => 'Seleccione Estado')); 
                    } else {
                        echo $form->dropDownList($model,'ciudad',
                                                CHtml::listData(Ciudad::model()->findAll(),'co_ciudad','nb_ciudad'
                                                                ),
                                                                array('ajax' => array('type' => 'POST',
                                                                   'url' => CController::createUrl('Unidades/SelectMunicipio'),
                                                                    'update' => '#Parroquia_ciudad'
                                                                    )
                                                                )
                                                );
                    }
                } ?>
        <?php echo $form->error($model,'ciudad'); ?>
    </div>

   

    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php   if ($model->isNewRecord==1){
                    echo $form->dropDownList($model,'muncp', array('0' => 'Seleccione Municipio'),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectParroquia'),
                                                                    'update' => '#Parroquia_muncp'
                                                                    )
                                                                )
                                    );
                } else {
                                        
                    $sql="select count(co_muncp)count from muncp where co_ciudad = '$model->ciudad';";
                    $connection=Yii::app()->db;
                    $command=$connection->createCommand($sql);
                    $row=$command->queryRow();
                    $bandera=$row['count'];

                    if ($bandera==0) {
                        echo $form->dropDownList($model,'muncp', array('0' => 'Seleccione Ciudad')); 
                    } else {
                        echo $form->dropDownList($model,'muncp',
                                                CHtml::listData(Muncp::model()->findAll(),'co_muncp','nb_muncp'
                                                                ),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectParroquia'),
                                                                    'update' => '#Parroquia_muncp'
                                                                    )
                                                                )
                                                );
                    }
                } ?>
        <?php echo $form->error($model,'muncp'); ?>
    </div>

    
        
	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nb_parroquia',array('size'=>30,'maxlength'=>30, 'placeholder'=>'Parroquia')); ?>
		<?php echo $form->error($model,'nb_parroquia'); ?>
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