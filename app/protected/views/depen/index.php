<?php
/* @var $this DepenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Depens',
);

$this->menu=array(
	array('label'=>'Create Depen', 'url'=>array('create')),
	array('label'=>'Manage Depen', 'url'=>array('admin')),
);
?>

<h1>Depens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
