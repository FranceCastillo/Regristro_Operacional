<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
	array('label'=>'Reporte', 'url'=>array('pdf','id'=>$model->id)),
);
?>

<h1>Personal Militar N°<?php echo $model->nu_docm_idnt; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_docm_idnt',
		'username',
		'nombre',
		'apellido',
		'sexo',
		'email',
		'nu_tlf_local',
		'nu_tlf_cel',
		'idCargo.nb_cargos',
		'idGrado.nb_grados',
	),
)); ?>
