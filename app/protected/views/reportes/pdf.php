<?php
$pdf = Yii::createComponent('application.extensions.tcpdf');
$html='
<table id="yw0" class="detail-view2">
<tr class="principal">
<td colspan="2" align="center"><b>DATOS DE UNIDADES</b></td>
<tr>
<tr class="odd">
<td> <b>Nombre</b> </td>
<td> '.$model->nb_unid.'</td>
</tr>
<tr class="even">
<td> <b>Dirección</b> </td>
<td> '.$model->direccion_unid.'</td>
</tr>
<tr class="even">
<td> <b>Municipio</b> </td>
<td> '.$model->id_muncp.'</td>
</tr>
<tr class="odd">
<td> <b>Personal Actuante</b> </td>
<td> '.$model->persona_encarg.'</td></tr>
</table>';
//$header='<img src="'.Yii::app()->request->baseUrl.'/images/banner.png"/>';
?>