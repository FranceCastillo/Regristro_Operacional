<?php
/* @var $this DetalleUnidController */
/* @var $model DetalleUnid */

$this->breadcrumbs=array(
	'Detalle Unids'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DetalleUnid', 'url'=>array('index')),
	array('label'=>'Create DetalleUnid', 'url'=>array('create')),
	array('label'=>'Update DetalleUnid', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DetalleUnid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleUnid', 'url'=>array('admin')),
);
?>

<h1>View DetalleUnid #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_unidad',
	),
)); ?>
