<?php
/* @var $this CargosController */
/* @var $model Cargos */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Crear Cargo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cargos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Gestionar Cargos</h1>


<?php 
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=> $records,
    'columns'=>array(
    	array(
        	'header'=>'Nombre',
        	'value'=>'nb_cargos'
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

