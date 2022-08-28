<?php
	Yii::app()->clientscript
		// use it when you need it!
		
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PUESTO DE COMANDO</title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font_awesome/css/font-awesome.css" />


<!-- Le fav and touch icons -->
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

		$clientScript->registerLinkTag('shortcut icon', null, $baseUrl . '/images/logo1.png');
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-144-precomposed.png', null, array('sizes' => '144x144'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-114-precomposed.png', null, array('sizes' => '114x114'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-72-precomposed.png', null, array('sizes' => '72x72'));
		$clientScript->registerLinkTag('apple-touch-icon-precomposed', null, $baseUrl . '/img/ico/apple-touch-icon-57-precomposed.png', null, array('sizes' => '57x57')); 
 	
        ?>

<body>

<div id="header">

         
                <div class="logo">
                <a href="index.php"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoo.png" class="image" width="30%"></a>
                    </div>

                 	
      
					<?php
				
				$this->widget('application.extensions.mbmenu.MbMenu',
	                    array(
	                    'items'=>array(
	   
	                             array('label'=>'Unidades',
	                                'items'=>array(
	                                	   array('label'=>'Buscar Unidades', 'url'=>array('/unidades/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                             		   array('label'=>'Ingresar Unidad', 'url'=>array('/unidades/create'),'visible'=>!Yii::app()->user->isGuest ),
	                                       array('label'=>'Reporte de Unidades', 'url'=>array('/reportes/unidades'),'visible'=>!Yii::app()->user->isGuest ),
	                                
	                                ),
	                            ),
	                            array('label'=>'Personal',
	                            	'items'=>array(
		                                    array('label'=>'Personal Militar', 'url'=>array('/personal/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                                   		array('label'=>'Ingresar Personal', 'url'=>array('/personal/create'),'visible'=>!Yii::app()->user->isGuest ),
	                                   		array('label'=>'Reporte de Personal', 'url'=>array('/reportes/personal'),'visible'=>!Yii::app()->user->isGuest ),
	                                   
			                           ),
	                            ),	          
	                            
	                            array('label'=>'Configuracion',
	                                'items'=>array(	
	                                	array('label'=>'Cargos', 'url'=>array('/cargos/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                                	array('label'=>'Grados', 'url'=>array('/grados/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                                	array('label'=>'Tipos de Unidad', 'url'=>array('/tipoUnidad/admin'),'visible'=>!Yii::app()->user->isGuest ),
	                         

	                            array('label'=>'Inf. Geográfica',
	                     			'items'=>array(
			                                	array('label'=>'Estado', 'url'=>array('/estado/admin'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Ciudad', 'url'=>array('/ciudad/admin'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Municipio', 'url'=>array('/muncp/admin'),'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Parroquia', 'url'=>array('/parroquia/admin'),'visible'=>!Yii::app()->user->isGuest ),
			                                            

			                                ),
			                              ),

			                           ),
			                      
			                       ),
	                                	
	               

	                            array('label'=>'Usuarios',
	                                'items'=>array(
	                                	 array('label'=>'Crear Usuario', 'url'=>Yii::app()->user->ui->userManagementCreateUrl,'visible'=>!Yii::app()->user->isGuest ),
	                                	
	                            
	                                    array('label'=>'Administrar', 
	                                    	'items'=>array(
			                                	array('label'=>'Ver Usuarios','url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest ),
			                                    array('label'=>'Sesiones', 'url'=>Yii::app()->user->ui->sessionAdminUrl,'visible'=>!Yii::app()->user->isGuest ),
			                            

			                           ),
			                      
			                       ),
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
				   <a href="index.php?r=respaldo/respaldo" title="Respaldo BD" style="margin-left:1200px; margin-top:10px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/db.png" class="icon24 icomoon-icon-database" /></a>
			
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	
    

	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>
       	  
	<?php echo $content ?>

	<body>
			
			<span id="liveclock" style="margin:2px; top:0; font-size:14px; color:#1E90FF; font-family:'Lucida Sans'"></span>


			</body>
	
	
	</div><!--/.fluid-container-->
	</div>
	
	<div class="footer">
	  <div class="container">
		<div class="row">
			<div id="footer-terms" class="col-md-6">
				
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
</body>
</html>
