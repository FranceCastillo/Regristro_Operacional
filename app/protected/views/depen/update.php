<?php
/* @var $this DepenController */
/* @var $model Depen */

$this->breadcrumbs=array(
	'Depens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Depen', 'url'=>array('index')),
	array('label'=>'Create Depen', 'url'=>array('create')),
	array('label'=>'View Depen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Depen', 'url'=>array('admin')),
);
?>

<h1>Update Depen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>