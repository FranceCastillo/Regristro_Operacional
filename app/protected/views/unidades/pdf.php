<?php
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
$html='
  <br>
  <br>
  <h4 align="center">DATOS DE LA UNIDAD<h4/>
    <br>
		<table id="yw0" class="detail-view2">
		<tr class="odd">
			<td bgcolor="#E5F1F4"><b>Nombre</b> </td>
			<td bgcolor="#E5F1F4">'.$model->nb_unid.'</td>
		</tr>
		<tr class="even">
           <td bgcolor="#F8F8F8"><b>Direccion</b> </td>
           <td bgcolor="#F8F8F8">'.$model->direccion_unid.'</td>
    </tr>
    <tr class="odd">
           <td bgcolor="#E5F1F4"><b>Estado</b> </td>
           <td bgcolor="#E5F1F4">'.$model->coEdoUni["nb_edo"].'</td></tr>
	   <tr class="even">
		        <td bgcolor="#F8F8F8"><b>Ciudad</b> </td>
            <td  bgcolor="#F8F8F8"> '.$model->coCiudadUni["nb_ciudad"].'</td>
      </tr>
      <tr class="odd">
            <td bgcolor="#E5F1F4"> <b>Municipio</b> </td>
            <td bgcolor="#E5F1F4"> '.$model->coMuncpUni["nb_muncp"].'</td></tr>
      <tr class="even">
            <td bgcolor="#F8F8F8"><b>Parroquia</b> </td>
            <td bgcolor="#F8F8F8"> '.$model->coParroquiaUni["nb_parroquia"].'</td>
      </tr>
       <tr class="odd">
            <td bgcolor="#E5F1F4"><b>Personal Encargado</b> </td>
            <td bgcolor="#E5F1F4">'.$model->idPersonal["nombre"].'</td></tr>
      <tr class="even">
            <td bgcolor="#F8F8F8"><b>Telefono</b> </td>
            <td bgcolor="#F8F8F8">'.$model->idPersonal["nu_tlf_cel"].'</td></tr>
      <tr class="odd">
           <td bgcolor="#E5F1F4"><b>Tipo de Unidad</b> </td>
           <td bgcolor="#E5F1F4"> '.$model->tipoUn["nb_tipo"].'</td>
       </tr>
       </table>';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$header='<img src="'.Yii::app()->request->baseUrl.'/images/logo2.png"/>';
$mpdf->SetHTMLHeader($header);
$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Unidades Militares');
$mpdf->WriteHTML($html);
$mpdf->Output('Datos de la Unidad.pdf','D');
exit;
?>