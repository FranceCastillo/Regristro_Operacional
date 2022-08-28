<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Unidades</h1>


<?php 
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=> $records,
    'columns'=>array(
		array(
        	'header'=>'Nombre',
        	'value'=>'nb_unid'
        ),
        array(
        	'header'=>'Dirección',
        	'value'=> 'direccion_unid'
        ),
		array(
		                    'header'=>'Ciudad',
		                    'value' => 'coParroquiaUni.nb_parroquia',
		                    'filter' => CHtml::listData(Parroquia::model()->findAll(), 'id_parroquia', 'nb_parroquia	')
		              ),
		array(
		                    'header'=>'Personal Encargado',
		                    'name'=>'id_personal',
		                    'value' => 'idPersonal.nombre',
		                    'filter' => CHtml::listData(Personal::model()->findAll(), 'id_personal', 'nombre')
		              ),

		
			)));

		
 ?>
