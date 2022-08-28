<?php
/* @var $this ReportesController */

$this->widget('ext.PdfGrid.EPDFGrid', array(
    'id'        => 'informe-pdf',
    'fileName'  => 'Lista de Personal',//Nombre del archivo generado sin la extension pdf (.pdf)
    'dataProvider'  => $dataProvider, //puede ser $model->search()
    'columns'   => array(
       'nu_docm_idnt',
        'nombre',
        'apellido',
        'nu_tlf_local',
        'nu_tlf_cel',
        array(
                            'header'=>'Cargo',
                            'name'=>'Cargo',
                            'value' => '$data->idCargo->nb_cargos',
                            'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
                            'filter' => CHtml::listData(Cargos::model()->findAll(), 'id_cargos', 'nb_cargos')
                      ),
        
	/* array(
            'name'  => 'columnName4',
            'value' => '$data->relationName->value',
        ), */
    ),
    'config'    => array(
        'title'     => 'Lista de Personal',
        'colWidths' => array(40, 40, 30, 60, 40, 50),
        'showLogo'  => true,
        'imagePath' => YiiBase::getPathOfAlias('webroot').'/images/logoo.png',
    ),
));
?>
