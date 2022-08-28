<?php
/* @var $this DepenController */
/* @var $model Depen */

$this->breadcrumbs=array(
	'Depens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Depen', 'url'=>array('index')),
	array('label'=>'Manage Depen', 'url'=>array('admin')),
);
?>

<h1>Create Depen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>