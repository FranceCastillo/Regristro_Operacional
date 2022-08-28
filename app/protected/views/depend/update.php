<?php
/* @var $this DependController */
/* @var $model Depend */

$this->breadcrumbs=array(
	'Depends'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Depend', 'url'=>array('index')),
	array('label'=>'Create Depend', 'url'=>array('create')),
	array('label'=>'View Depend', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Depend', 'url'=>array('admin')),
);
?>

<h1>Update Depend <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>