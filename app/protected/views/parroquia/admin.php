<?php
    /* @var $this ParroquiaController */
    /* @var $model Parroquia */

    $this->breadcrumbs=array(
    	'Parroquias'=>array('index'),
    	'Gestionar',
    );


    $this->menu=array(
    	array('label'=>'Crear Parroquia', 'url'=>array('create')),
    );


    Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
    	$('.search-form').toggle();
    	return false;
    });
    $('.search-form form').submit(function(){
    	$('#parroquia-grid').yiiGridView('update', {
    		data: $(this).serialize()
    	});
    	return false;
    });
    ");
    ?>

    <h1>Gestionar Parroquias</h1>


    <?php 
    $this->widget('application.extensions.tablesorter.Sorter', array(
        'data'=> $records,
        'columns'=>array(
        	array(
            	'header'=>'Parroquia',
            	'value'=>'nb_parroquia'
            ),
             array(
            	'header'=>'Municipio',
            	'value'=>'coMuncp.nb_muncp'
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

