<?php
/* @var $this DetalleUnidController */
/* @var $model DetalleUnid */

$this->breadcrumbs=array(
	'Detalle Unids'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleUnid', 'url'=>array('index')),
	array('label'=>'Create DetalleUnid', 'url'=>array('create')),
	array('label'=>'View DetalleUnid', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DetalleUnid', 'url'=>array('admin')),
);
?>

<h1>Update DetalleUnid <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>