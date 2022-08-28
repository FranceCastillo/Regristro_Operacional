<?php
/* @var $this MuncpController */
/* @var $model Muncp */

$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Municipios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>