<h1><?php echo ucwords(CrugeTranslator::t("crear nuevo usuario"));?></h1>
<div class="form">
<?php
	/*
		$model:  es una instancia que implementa a ICrugeStoredUser
	*/
?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'crugestoreduser-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
)); ?>
<div class="row form-group">
	<div class="col">
		<?php echo $form->textField($model,'username',array('placeholder'=>'Usuario')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<br>
	<div class="col">
		<?php echo $form->textField($model,'email',array('placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<br>
	<div class="col">
		<?php echo $form->textField($model,'newPassword',array('placeholder'=>'Contraseña')); ?>
		<?php echo $form->error($model,'newPassword'); ?>
		
		<script>
			function fnSuccess(data){
				$('#CrugeStoredUser_newPassword').val(data);
			}
			function fnError(e){
				alert("error: "+e.responseText);
			}
		</script>
	
	 
		<?php echo CHtml::ajaxbutton(
			CrugeTranslator::t("Generar")
			,Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
			,array('success'=>'js:fnSuccess','error'=>'js:fnError')
		); ?>
		
	
		
	</div>
</div>
	

        <div class="btn-group">
                <button type = "submit" class="btn btn-primary" name = "entrar">
                 <span class="fa fa-check"></span> 
             
       Crear
    </button>

<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
</div>