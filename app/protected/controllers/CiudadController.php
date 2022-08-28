<?php

class CiudadController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Ciudad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ciudad']))
		{
			$model->attributes=$_POST['Ciudad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->co_ciudad));
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

		if(isset($_POST['Ciudad']))
		{
			$model->attributes=$_POST['Ciudad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->co_ciudad));
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
		$dataProvider=new CActiveDataProvider('Ciudad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
	    $records=Ciudad::model()->findAll();
	    $this->render('admin',array(
	        'records'=>$records,
	    )); 
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ciudad the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ciudad::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ciudad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ciudad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	 public function actionSelectCiudad()
    {
        $data = Ciudad::model()->findAll('co_edo = :v_co_edo',
                                            array(':v_co_edo' =>(int) $_POST['Ciudad']['estado']));
        
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
