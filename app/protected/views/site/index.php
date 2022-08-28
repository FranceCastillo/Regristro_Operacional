<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>



<em><h1 style="font-family:'Georgia'">Bienvenido<?php echo CHtml::encode(Yii::app()->name); ?></h1><em>

<center><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/milicia.png" height="280px" width="300"     align="center" padding="20px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/milicia2.png" height="280px" width="300" padding="20px"></center>	
		
<?php
//Para colocar el nombre de la app
//php echo CHtml::encode(Yii::app()->name); 
?>
