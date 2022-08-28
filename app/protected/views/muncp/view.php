<?php
/* @var $this MuncpController */
/* @var $model Muncp */

$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->co_muncp,
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->co_muncp)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_muncp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Municipio #<?php echo $model->co_muncp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nb_muncp',
		'coCiudad.nb_ciudad',
	),
)); ?>

