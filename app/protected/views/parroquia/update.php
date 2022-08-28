<?php
/* @var $this ParroquiaController */
/* @var $model Parroquia */

$this->breadcrumbs=array(
	'Parroquias'=>array('index'),
	$model->co_parroquia=>array('view','id'=>$model->co_parroquia),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_parroquia)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Modificar Parroquia <?php echo $model->co_parroquia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>