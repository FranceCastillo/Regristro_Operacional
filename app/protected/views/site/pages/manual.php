<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Documentacion';
$this->breadcrumbs=array(
	'Documentación',
);
?>

<h3>Manual del usuario:</h3>
<a href="<?php echo Yii::app()->request->baseUrl;?>/docs/manual.pdf" target="_blank"><span>Manual_del_Usuario.pdf</span></a>


