<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property integer $id
 * @property integer $nu_docm_idnt
 * @property string $username
 * @property string $nombre
 * @property string $apellido
 * @property string $sexo
 * @property string $email
 * @property string $nu_tlf_local
 * @property string $nu_tlf_cel
 * @property integer $id_cargo
 * @property integer $id_grado
 *
 * The followings are the available model relations:
 * @property Cargos $idCargo
 * @property CrugeUser $username0
 * @property Grados $idGrado
 * @property Unidades[] $unidades
 */
class Personal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_docm_idnt, username, id_cargo, id_grado, nombre, apellido', 'required'),
			array('nu_docm_idnt, id_cargo, id_grado', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>10),
			array('nombre, apellido, email', 'length', 'max'=>30),
			array('sexo', 'length', 'max'=>1),
			array('email', 'email'),
			array('nu_tlf_local, nu_tlf_cel', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nu_docm_idnt, username, nombre, apellido, sexo, email, nu_tlf_local, nu_tlf_cel, id_cargo, id_grado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCargo' => array(self::BELONGS_TO, 'Cargos', 'id_cargo'),
			'username0' => array(self::BELONGS_TO, 'CrugeUser', 'username'),
			'idGrado' => array(self::BELONGS_TO, 'Grados', 'id_grado'),
			'unidades' => array(self::HAS_MANY, 'Unidades', 'id_personal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'nu_docm_idnt' => 'Nro.Cedula',
			'username' => 'Usuario',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'sexo' => 'Sexo',
			'email' => 'Correo Electronico',
			'nu_tlf_local' => 'Telefono Local',
			'nu_tlf_cel' => 'Telefono Celular',
			'id_cargo' => 'Cargo',
			'idCargo.nb_cargos' => 'Cargo',
			'idGrado.nb_grados' => 'Grado',
			'id_grado' => 'Grado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nu_docm_idnt',$this->nu_docm_idnt);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nu_tlf_local',$this->nu_tlf_local,true);
		$criteria->compare('nu_tlf_cel',$this->nu_tlf_cel,true);
		$criteria->compare('id_cargo',$this->id_cargo);
		$criteria->compare('id_grado',$this->id_grado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
