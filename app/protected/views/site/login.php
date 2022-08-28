<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    
   
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

       <!-- ////// extjs /////// -->
  

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font_awesome/css/font-awesome.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style-login.css" />
   
 
    <!-- Main stylesheets -->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <link type="text/css" href="css/ie.css" rel="stylesheet" />
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
      


<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
        
    
<body>
<div class="container">
  <section id="content">
    <form action="">
      <h1>Iniciar Sesion</h1>
      <div class="button"><i class="fa fa-user fa-lg"></i>
         <?php echo $form->textField($model,'username',array('size'=>8, 'placeholder'=>'Usuario',)); ?>
                    <?php echo $form->error($model,'username'); ?> <br>
             </div>       
           <br>
            <div class="button"><i class="fa fa-lock fa-lg"></i>
            <?php echo $form->passwordField($model,'password', array('placeholder'=>'Contraseña')); ?> 
                    <?php echo $form->error($model,'password'); ?><br>
            </div>
      <div>
        <input type="submit" value="Entrar" />
        <a href="index.php?r=cruge/ui/pwdrec">Olvido su contraseña?</a>
        <a href="index.php?r=cruge/ui/registration">Registrar</a>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</body>
</html>
   
       <div class="button">
            <a href="<?php echo Yii::app()->request->baseUrl;?>/docs/manual.pdf">Descargar Manual</a>
        </div><!-- button -->
</body>
</html>
        </div>
    </div><!-- End .container-fluid -->
    <?php $this->endWidget(); ?>
    </body>
</html>
