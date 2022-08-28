<?php
/* @var $this DetalleUnidController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Unids',
);

$this->menu=array(
	array('label'=>'Create DetalleUnid', 'url'=>array('create')),
	array('label'=>'Manage DetalleUnid', 'url'=>array('admin')),
);
?>

<h1>Detalle Unids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
