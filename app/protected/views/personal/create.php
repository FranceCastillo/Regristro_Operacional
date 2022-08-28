<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Crear',
);
$this->menu=array(
	array('label'=>'Gestionar', 'url'=>array('admin')),
);


?>

<h2>Crear Personal</h2>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

