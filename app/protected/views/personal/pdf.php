<?php
$pdf = Yii::createComponent('application.extensions.mpdf.mpdf');
$html='
    <br>
    <br>
    <h4 align="center">DATOS DEL PERSONAL<h4/>
    <br>
		<table id="yw0" class="detail-view" align="center">
		<tr>
		<tr class="odd">
			<td bgcolor="#E5F1F4"><b>Nombre</b> </td>
			<td bgcolor="#E5F1F4"> '.$model->nombre.'</td>
		</tr>
    <tr class="even">
      <td bgcolor="#F8F8F8"><b>Apellido</b> </td>
      <td bgcolor="#F8F8F8">'.$model->apellido.'</td>
    </tr>
		<tr class="odd">
           <td bgcolor="#E5F1F4"> <b>Cedula</b> </td>
           <td bgcolor="#E5F1F4"> '.$model->nu_docm_idnt.'</td>
    </tr>
    <tr class="even">
      <td bgcolor="#F8F8F8"><b>Correo Electronico</b> </td>
      <td bgcolor="#F8F8F8">'.$model->email.'</td>
    </tr>
    <tr class="odd">
           <td bgcolor="#E5F1F4"> <b>Numero de Telefono Local</b> </td>
           <td bgcolor="#E5F1F4"> '.$model->nu_tlf_local.'</td></tr>
	   <tr class="even">
		        <td bgcolor="#F8F8F8"> <b>Numero de Telefono Celular</b> </td>
            <td bgcolor="#F8F8F8"> '.$model->nu_tlf_cel.'</td>
      </tr>
      <tr class="even">
            <td bgcolor="#F8F8F8"> <b>Cargo</b> </td>
            <td bgcolor="#F8F8F8"> '.$model->idCargo["nb_cargos"].'</td>
      </tr>
       <tr class="odd">
            <td bgcolor="#E5F1F4"> <b>Grado</b> </td>
            <td bgcolor="#E5F1F4"> '.$model->idGrado["nb_grados"].'</td></tr>
       </table>';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$header='<img src="'.Yii::app()->request->baseUrl.'/images/logo2.png"/>';
$mpdf->SetHTMLHeader($header);
$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Personal Militar');
$mpdf->WriteHTML($html);
$mpdf->Output('Datos del Personal.pdf','D');
exit;
?>