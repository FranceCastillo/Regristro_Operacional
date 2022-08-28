<?php
/* @var $this DepenController */
/* @var $model Depen */

$this->breadcrumbs=array(
	'Depens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Depen', 'url'=>array('index')),
	array('label'=>'Create Depen', 'url'=>array('create')),
	array('label'=>'Update Depen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Depen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Depen', 'url'=>array('admin')),
);
?>

<h1>View Depen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nb_dep',
	),
)); ?>
