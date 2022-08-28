<?php
/* @var $this EstadoController */
/* @var $model Estado */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Gestionar Estados</h1>


<?php 
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=> $records,
    'columns'=>array(
    	array(
        	'header'=>'Nombre',
        	'value'=>'nb_edo'
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

