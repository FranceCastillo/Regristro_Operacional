<?php
/* @var $this ReportesController */

$this->widget('ext.PdfGrid.EPDFGrid', array(
    'id'        => 'informe-pdf',
    'fileName'  => 'Lista de Unidades',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider, //puede ser $model->search()
    'columns'=>array(
        'nb_unid',
        array(
                            'header'=>'Estado',
                            'name'=>'Estado',
                            'value' => '$data->coEdoUni->nb_edo',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(Estado::model()->findAll(), 'id', 'nb_edo')
                      ),
         array(
                            'header'=>'Cuidad',
                            'name'=>'Ciudad',
                            'value' => '$data->coCiudadUni->nb_ciudad',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(Ciudad::model()->findAll(), 'id', 'nb_ciudad')
                      ),
          array(
                            'header'=>'Municipio',
                            'name'=>'Municipio',
                            'value' => '$data->coMuncpUni->nb_muncp',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(Muncp::model()->findAll(), 'id', 'nb_muncp')
                      ),


        array(
                            'header'=>'Personal',
                            'name'=>'Personal Encargado',
                            'value' => '$data->idPersonal->nombre',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(Personal::model()->findAll(), 'id_personal', 'nombre')
                      ),

        array(
                            'header'=>'Tipo de Unidad',
                            'name'=>'tipo_unid',
                            'value' => '$data->tipoUn->nb_tipo',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(TipoUnidad::model()->findAll(), 'id', 'nb_tipo')
                      ),
        /* array(
            'name'  => 'columnName4',
            'value' => '$data->relationName->value',
        ), */
    ),
    'config'    => array(
        'title'     => 'Lista de Unidades',
        'subTitle'  => 'Al la fecha: '.date('Y-m-d'),
        'colWidths' => array(50, 50, 50, 50, 50),
        'showLogo'  => true,
        'imagePath' => YiiBase::getPathOfAlias('webroot').'/images/logoo.png',
    ),
));
?>
