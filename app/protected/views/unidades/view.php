<?php
/* @var $this UnidadesController */
/* @var $model Unidades */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro de eliminar esta Unidad?')),
	array('label'=>'Reporte', 'url'=>array('pdf','id'=>$model->id)),
);
?>

<h1>Unidad <?php echo $model->nb_unid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nb_unid',
    'direccion_unid',
		'coor_unid',
		'coEdoUni.nb_edo',
		'coCiudadUni.nb_ciudad',
		'coMuncpUni.nb_muncp',
		'coParroquiaUni.nb_parroquia',
		'idPersonal.nombre',
		'idPersonal.nu_tlf_cel',
		'tipoUn.nb_tipo',

	),
)); ?>
<br>
<br>
<?php
                          
                          $doc=new DOMDocument();
                        $direccion=$model["direccion_unid"]." ".$model["coor_unid"];
              $xml="http://maps.googleapis.com/maps/api/geocode/xml?address=".$direccion."&sensor=true";
      //echo $xml;
                            $doc->load($xml);

              $persona=$doc->getElementsByTagName("result");

              foreach ($persona as $p)
              {
                  $latitud=$p->getElementsByTagName("lat");
                  $latitud=$latitud->item(0)->nodeValue;
                  
                  $longitud=$p->getElementsByTagName("lng");
                  $longitud=$longitud->item(0)->nodeValue;
                  
                  
                  
                  //echo "latitud=".$latitud." - longitud=".$longitud."<br>";
              }
              
                          ?>
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=true">
</script>
<script type="text/javascript">

   function cargar_mapa()
    {
        var myOptions = {
          scaleControl: true,
          center: new google.maps.LatLng(<?php echo $latitud;?>, <?php echo $longitud;?>),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('map_canvas'),
            myOptions);

        var marker = new google.maps.Marker({
          map: map,
      title: "<?php echo $direccion;?>",
          position: map.getCenter()
        });
        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent('<b>Mapa</b>');
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
    
      }

      google.maps.event.addDomListener(window, 'load', cargar_mapa);

</script>
</head>
<body>

  <div id="map_canvas" style="width:900px; height:500px;"></div>
</body>
</html>