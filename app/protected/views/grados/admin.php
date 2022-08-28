<?php
/* @var $this GradosController */
/* @var $model Grados */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Crear Grado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Grados</h1>


<?php 
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=> $records,
    'columns'=>array(
    	array(
        	'header'=>'Nombre',
        	'value'=>'nb_grados'
        ),
		
),
        'buttons'=>array( // it was optional
        array(

        'action'=>'', // disable the action (last row)
        'view'=>'', // disable the view button
        'edit'=>'', // disable the edit button
        'delete'=>'',
        ''=>''), // disable the delete button
    ),  

	));


?>

