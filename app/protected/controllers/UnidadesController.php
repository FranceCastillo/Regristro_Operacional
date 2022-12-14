<?php

class UnidadesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','pdf', 'SelectCiudad','SelectMunicipio', 'SelectParroquia', 'ListarPersonal'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin',),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionPdf($id)
	{
		 $this->render('pdf',array(
		'model'=>$this->loadModel($id),
	  ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Unidades;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Unidades']))
		{
			$model->attributes=$_POST['Unidades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Unidades']))
		{
			$model->attributes=$_POST['Unidades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Unidades');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
	    $records=Unidades::model()->findAll();
	    $this->render('admin',array(
	        'records'=>$records,
	    )); 
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Unidades the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Unidades::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Unidades $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='unidades-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	//nombres_ciudadano y apellidos_ciudadano son campos de la tabla ciudadanos para mostrar en el autocompletado.
 
//id_ciudadano es la pk de la tabla ciudadanos, lo que se usar??a para guardar como fk al elegir una opci??n del listado.
 
	public function actionListarPersonal($term)
	{
		 $criteria = new CDbCriteria;
		 $criteria->condition = "LOWER(nombre) like LOWER(:term) or LOWER(apellido) like LOWER(:term)
 		or (nu_docm_idnt) like LOWER(:term)";
 		$criteria->params = array(':term'=> '%'.$_GET['term'].'%');
 		$criteria->limit = 30;
 		$models = Personal::model()->findAll($criteria);
 	
 		if (!empty($models))
 		{
 			$arr = array();

 		foreach($models as $model)
   		{
		 $arr[] = array(
 		'label'=>($model->nombre.' '.$model->apellido.' ('.$model->nu_docm_idnt.')'), // label for dropdown list
 		'value'=>($model->nombre.' '.$model->apellido.' ('.$model->nu_docm_idnt.')'), // value for input field
 		'id'=>$model->id, // return value from autocomplete
 		);
 	}
 }
 	else
 	  {
  		$arr = array();
  		$arr[] = array(
   		'id' => '',
   		'value' => 'No se han encontrado resultados para su b??squeda',
   		'label' => 'No se han encontrado resultados para su b??squeda',
  	);
 }
 	echo CJSON::encode($arr);
 }


	 public function actionSelectCiudad()
    {
        $data = Ciudad::model()->findAll('co_edo = :v_co_edo',
                                            array(':v_co_edo' =>(int) $_POST['Unidades']['co_edo_uni']));
        
        $data = CHtml::listData($data,'co_ciudad','nb_ciudad');
		        
        echo CHtml::tag('option',array('value' => ''),'Seleccione Ciudad...',true);
        foreach($data as $id => $value)
        {
            echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
        }
        
    }


    public function actionSelectMunicipio()
    {
        $data = Muncp::model()->findAll('co_ciudad = :v_co_ciudad',
                                            array(':v_co_ciudad' =>(int) $_POST['Unidades']['co_ciudad_uni']));
        
        $data = CHtml::listData($data,'co_muncp','nb_muncp');
		        
        echo CHtml::tag('option',array('value' => ''),'Seleccione Municipio...',true);
        foreach($data as $id => $value)
        {
            echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
        }
        
    }
     public function actionSelectParroquia()
    {
        $data = Parroquia::model()->findAll('co_muncp = :v_co_muncp',
                                            array(':v_co_muncp' =>(int) $_POST['Unidades']['co_muncp_uni']));
        
        $data = CHtml::listData($data,'co_parroquia','nb_parroquia');
		        
        echo CHtml::tag('option',array('value' => ''),'Seleccione Parroquia...',true);
        foreach($data as $id => $value)
        {
            echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
        }
        
    }
}
