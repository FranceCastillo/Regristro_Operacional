<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Estado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>