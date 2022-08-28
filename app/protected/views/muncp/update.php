<?php
/* @var $this MuncpController */
/* @var $model Muncp */

$this->breadcrumbs=array(
	'Municipio'=>array('index'),
	$model->co_muncp=>array('view','id'=>$model->co_muncp),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_muncp)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Modificar Municipio <?php echo $model->co_muncp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>