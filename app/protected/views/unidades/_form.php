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
	'id'=>'unidades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<br>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'nb_unid',array('size'=>50,'maxlength'=>50, 'placeholder'=>'Nombre')); ?>
		<?php echo $form->error($model,'nb_unid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'direccion_unid',array('size'=>60,'maxlength'=>200, 'placeholder' => 'Dirección')); ?>
		<?php echo $form->error($model,'direccion_unid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'&nbsp'); ?>
		<?php echo $form->textField($model,'coor_unid',array('size'=>50,'maxlength'=>50, 'placeholder' => 'Coordenadas')); ?>
		<?php echo $form->error($model,'coor_unid'); ?>
	</div>


        
    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php $vEstado = new CDbCriteria;
              $vEstado->order = 'nb_edo ASC';
              echo $form->dropDownList($model,'co_edo_uni', CHtml::listData(Estado::model()->findAll($vEstado), 'co_edo','nb_edo'),
                                    array('ajax' => array('type' => 'POST',
                                                        'url' => CController::createUrl('Unidades/SelectCiudad'),
                                                        'update' => '#Unidades_co_ciudad_uni'
                                                          ),'prompt' => 'Seleccione...'
                                        )
                                    );  ?>
        <?php echo $form->error($model,'co_edo_uni'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php   if ($model->isNewRecord==1){
                    echo $form->dropDownList($model,'co_ciudad_uni', array('0' => 'Seleccione Ciudad'),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectMunicipio'),
                                                                    'update' => '#Unidades_co_muncp_uni'
                                                                    )
                                                                )
                                    );
                } else {
                                        
                    $sql="select count(co_ciudad)count from ciudad where co_edo = '$model->co_edo_uni';";
                    $connection=Yii::app()->db;
                    $command=$connection->createCommand($sql);
                    $row=$command->queryRow();
                    $bandera=$row['count'];

                    if ($bandera==0) {
                        echo $form->dropDownList($model,'co_ciudad_uni', array('0' => 'Seleccione Estado')); 
                    } else {
                        echo $form->dropDownList($model,'co_ciudad_uni',
                                                CHtml::listData(Ciudad::model()->findAll(),'co_ciudad','nb_ciudad'
                                                                ),
                                                                array('ajax' => array('type' => 'POST',
                                                                   'url' => CController::createUrl('Unidades/SelectMunicipio'),
                                                                    'update' => '#Unidades_co_muncp_uni'
                                                                    )
                                                                )
                                                );
                    }
                } ?>
        <?php echo $form->error($model,'co_ciudad_uni'); ?>
    </div>

   

    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php   if ($model->isNewRecord==1){
                    echo $form->dropDownList($model,'co_muncp_uni', array('0' => 'Seleccione Municipio'),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectParroquia'),
                                                                    'update' => '#Unidades_co_parroquia_uni'
                                                                    )
                                                                )
                                    );
                } else {
                                        
                    $sql="select count(co_muncp)count from muncp where co_ciudad = '$model->co_ciudad_uni';";
                    $connection=Yii::app()->db;
                    $command=$connection->createCommand($sql);
                    $row=$command->queryRow();
                    $bandera=$row['count'];

                    if ($bandera==0) {
                        echo $form->dropDownList($model,'co_muncp_uni', array('0' => 'Seleccione Ciudad')); 
                    } else {
                        echo $form->dropDownList($model,'co_muncp_uni',
                                                CHtml::listData(Muncp::model()->findAll(),'co_muncp','nb_muncp'
                                                                ),
                                                                array('ajax' => array('type' => 'POST',
                                                                    'url' => CController::createUrl('Unidades/SelectParroquia'),
                                                                    'update' => '#Unidades_co_parroquia_uni'
                                                                    )
                                                                )
                                                );
                    }
                } ?>
        <?php echo $form->error($model,'co_muncp_uni'); ?>
    </div>

    

    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>

        <?php   if ($model->isNewRecord==1){
                    echo $form->dropDownList($model,'co_parroquia_uni', array('0' => 'Seleccione Parroquia'));
                } else {
                    
                    $sql="select count(co_parroquia)count from parroquia where co_muncp = '$model->co_muncp_uni';";
                    $connection=Yii::app()->db;
                    $command=$connection->createCommand($sql);
                    $row=$command->queryRow();
                    $bandera=$row['count'];

                    if ($bandera==0) {
                        echo $form->dropDownList($model,'co_parroquia_uni', array('0' => 'Seleccione Municipio')); 
                    } else {
                        echo $form->dropDownList($model,'co_parroquia_uni',
                                                CHtml::listData(Parroquia::model()->findAll(),'co_parroquia','nb_parroquia'
                                                                )
                                                );
                    }
                } ?>
        <?php echo $form->error($model,'co_parroquia_uni'); ?>        
    </div>    

    
        <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php echo $form->dropDownList($model,'id_depen', CHtml::listData(Depen::model()->findAll(), 'id', 'nb_dep'),      
            array (
                'prompt'=>'Seleccione Dependencia' 
                )
        ); ?>
        <?php echo $form->error($model,'id_depen'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php echo $form->dropDownList($model,'id_personal', CHtml::listData(Personal::model()->findAll(), 'id', 'apellido', 'nu_docm_idnt'),      
            array (
                'prompt'=>'Seleccione personal' 
                )
        ); ?>
        <?php echo $form->error($model,'id_personal'); ?>
    </div>
     
            
	
	<div class="row">
        <?php echo $form->labelEx($model,'&nbsp'); ?>
        <?php echo $form->dropDownList($model,'tipo_unid', CHtml::listData(TipoUnidad::model()->findAll(), 'id', 'nb_tipo'),      
            array (
                'prompt'=>'Seleccione el tipo' 
                )
        ); ?>
        <?php echo $form->error($model,'tipo_unid'); ?>
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
                <button type = "submit" class="btn btn-primary" name = "Crear">
                 <span class="fa fa-check"></span> 
             
        Crear
    </button>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

