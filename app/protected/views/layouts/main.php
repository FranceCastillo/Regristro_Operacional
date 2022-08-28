<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.css" media="bootstrap" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap-responsive.css" media="bootstrap" />
     
   
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font_awesome/css/font-awesome.css" />

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<script language="JavaScript" type="text/javascript">
// Reloj digital para web javascript
// Copyright 2015 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return
 
 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()
 
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
 
 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock="<b>Hora actual:   "+hours+":"+minutes+":"
 +seconds+" "+dn+"</b>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
 }
 
 
window.onload=show5
  
 </script>
	</head>

		<?php $baseUrl = Yii::app()->request->baseUrl;
		$clientScript = Yii::app()->getClientScript();
		$clientScript->registerMetaTag("text/html; charset=utf-8",null,"Content-Type");
		$clientScript->registerMetaTag("es","language");
		$clientScript->registerMetaTag("width=device-width, initial-scale=1.0","viewport");
		$clientScript->registerMetaTag("rios.nicolas@gmail.com","author");
		$clientScript->registerMetaTag("IE=edge",null,"X-UA-Compatible");

		$clientScript->registerLinkTag('shortcut icon', null, $baseUrl . '/images/iconos/logo1.ico');
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-144-precomposed.png', null, array('sizes' => '144x144'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-114-precomposed.png', null, array('sizes' => '114x114'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-72-precomposed.png', null, array('sizes' => '72x72'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-57-precomposed.png', null, array('sizes' => '57x57')); 
 		?>

	<body>

		<div class="container" id="page">

			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div><!-- header -->

			<div id="">
				<?php
				
				$this->widget('application.extensions.mbmenu.MbMenu',
	                    array(
	                    'items'=>array(
	                            array('label'=>'Inicio', 'url'=>array('/site/index')),
	                            array('label'=>'Personal',
	                            	'items'=>array(
		                                    array('label'=>'Personal Militar', 'url'=>array('/personal/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                                   		array('label'=>'Ingresar Personal', 'url'=>array('/personal/create'),'visible'=>!Yii::app()->user->isGuest ),
	                                   		array('label'=>'Reporte de Personal', 'url'=>array('/reportes/personal'),'visible'=>!Yii::app()->user->isGuest ),
	                                   
			                           ),
	                            ),	          

	                            array('label'=>'Unidades',
	                                'items'=>array(
	                                	   array('label'=>'Buscar Unidades', 'url'=>array('/unidades/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                             		   array('label'=>'Ingresar Unidad', 'url'=>array('/unidades/create'),'visible'=>!Yii::app()->user->isGuest ),
	                                       array('label'=>'Reporte de Unidades', 'url'=>array('/reportes/unidades'),'visible'=>!Yii::app()->user->isGuest ),
	                                
	                                ),
	                            ),
	                            
	                            array('label'=>'Configuracion',
	                                'items'=>array(
	                                	array('label'=>'Dependencia', 'url'=>array('/depend/index'),'visible'=>!Yii::app()->user->isGuest ),
	                                	array('label'=>'Cargos', 'url'=>array('/cargos/index'),'visible'=>!Yii::app()->user->isGuest ),
	                                	array('label'=>'Grados', 'url'=>array('/grados/index'),'visible'=>!Yii::app()->user->isGuest ),
	                                	array('label'=>'Tipos de Unidad', 'url'=>array('/tipoUnidad/index'),'visible'=>!Yii::app()->user->isGuest ),
	                         

	                            array('label'=>'Inf. Geográfica',
	                     			'items'=>array(
			                                	array('label'=>'Estado', 'url'=>array('/estado/index'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Ciudad', 'url'=>array('/ciudad/index'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Municipio', 'url'=>array('/muncp/index'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Parroquia', 'url'=>array('/parroquia/index'),'visible'=>!Yii::app()->user->isGuest ),
			                                            

			                                ),
			                              ),

			                           ),
			                      
			                       ),
	                                	
	               

	                            array('label'=>'Usuarios',
	                                'items'=>array(
	                                    array('label'=>'Administrar', 'url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest ),
	                                	
	                                ),
	                            ),

	                            array('label'=>'Ayuda',
	                                'items'=>array(
	                                    array('label'=>'Documentacion', 'url'=>array('/site/page','view'=>'manual'),'visible'=>!Yii::app()->user->isGuest ),
	                                   
	                               
	                                ),
	                            ),
	                            
	                            
	                            array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	                            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
	                           	
	                        ),
	                    )
	                );

				?>
                    <a href="index.php?r=respaldo/respaldo" title="Respaldo BD" class="tip"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/iconos/db.png" class="icon24 icomoon-icon-database" /></a>
           
             
				
			</div><!-- mainmenu -->
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content; ?>
			<body>
			
			<span id="liveclock" style="margin:2px; top:0; font-size:14px; color:#1E90FF; font-family:'Lucida Sans'"></span>


			</body>

			<div class="clear"></div>

			<div id="footer">
				<!--Copyright &copy; --><?php //echo date('Y'); ?> Región Estratégica de Defensa Integral los Llanos.<br/>
				 	.<br/>
				<!--<?php //echo Yii::powered(); ?> -->
			</div><!-- footer -->

		</div><!-- page -->

		<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>

	</body>
</html>
