<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudades'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Ciudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>