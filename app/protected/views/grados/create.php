<?php
/* @var $this GradosController */
/* @var $model Grados */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Grados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>