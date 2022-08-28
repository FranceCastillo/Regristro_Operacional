<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro de eliminar esta Unidad?')),
	array('label'=>'Reporte', 'url'=>array('pdf','id'=>$model->id)),
);
?>

<h1>Unidad <?php echo $model->nb_unid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nb_unid',
    'direccion_unid',
		'coor_unid',
		'coEdoUni.nb_edo',
		'coCiudadUni.nb_ciudad',
		'coMuncpUni.nb_muncp',
		'coParroquiaUni.nb_parroquia',
		'idPersonal.nombre',
		'idPersonal.nu_tlf_cel',
		'tipoUn.nb_tipo',

	),
)); ?>
