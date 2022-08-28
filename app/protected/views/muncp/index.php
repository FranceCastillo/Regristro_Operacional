<?php
/* @var $this MuncpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Municipios',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Municipios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
