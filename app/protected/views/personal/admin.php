<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personal'=>array('index'),
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
	$('#personal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Personal</h1>


<?php 
$this->widget('application.extensions.tablesorter.Sorter', array(
    'data'=> $records,
    'columns'=>array(
    	array(
        	'header'=>'Cedula',
        	'value'=>'nu_docm_idnt'
        ),
		'nombre',
		'apellido',
		array(
        	'header'=>'Telefono Local',
        	'value' => 'nu_tlf_local'
        ),
		array(
        	'header'=>'Telefono Celular',
        	'value' => 'nu_tlf_cel'
        ),
        array(
        	'header'=>'Cargo',
        	'value'=>'idCargo.nb_cargos'
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
