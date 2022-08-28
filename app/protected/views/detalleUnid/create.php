<?php
/* @var $this DetalleUnidController */
/* @var $model DetalleUnid */

$this->breadcrumbs=array(
	'Detalle Unids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleUnid', 'url'=>array('index')),
	array('label'=>'Manage DetalleUnid', 'url'=>array('admin')),
);
?>

<h1>Create DetalleUnid</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>