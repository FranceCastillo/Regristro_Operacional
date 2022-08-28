<?php
/* @var $this DependController */
/* @var $model Depend */

$this->breadcrumbs=array(
	'Depends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Depend', 'url'=>array('index')),
	array('label'=>'Create Depend', 'url'=>array('create')),
	array('label'=>'Update Depend', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Depend', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Depend', 'url'=>array('admin')),
);
?>

<h1>View Depend #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_detalle',
	),
)); ?>
