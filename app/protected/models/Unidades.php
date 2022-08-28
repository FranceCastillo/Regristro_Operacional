<?php

/**
 * This is the model class for table "unidades".
 *
 * The followings are the available columns in table 'unidades':
 * @property integer $id
 * @property string $nb_unid
 * @property string $direccion_unid
 * @property string $coor_unid
 * @property integer $id_depen
 * @property integer $id_personal
 * @property integer $tipo_unid
 * @property integer $co_edo_uni
 * @property integer $co_ciudad_uni
 * @property integer $co_muncp_uni
 * @property integer $co_parroquia_uni
 *
 * The followings are the available model relations:
 * @property Ciudad $coCiudadUni
 * @property Depen $idDepen
 * @property Estado $coEdoUni
 * @property Muncp $coMuncpUni
 * @property Parroquia $coParroquiaUni
 * @property Personal $idPersonal
 * @property TipoUnidad $tipoUn
 */
class Unidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_unid, direccion_unid, id_personal', 'required'),
			array('id_depen, id_personal, tipo_unid, co_edo_uni, co_ciudad_uni, co_muncp_uni, co_parroquia_uni', 'numerical', 'integerOnly'=>true),
			array('nb_unid, coor_unid', 'length', 'max'=>50),
			array('direccion_unid', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nb_unid, direccion_unid, coor_unid, id_depen, id_personal, tipo_unid, co_edo_uni, co_ciudad_uni, co_muncp_uni, co_parroquia_uni', 'safe', 'on'=>'search'),
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
			'coCiudadUni' => array(self::BELONGS_TO, 'Ciudad', 'co_ciudad_uni'),
			'idDepen' => array(self::BELONGS_TO, 'Depen', 'id_depen'),
			'coEdoUni' => array(self::BELONGS_TO, 'Estado', 'co_edo_uni'),
			'coMuncpUni' => array(self::BELONGS_TO, 'Muncp', 'co_muncp_uni'),
			'coParroquiaUni' => array(self::BELONGS_TO, 'Parroquia', 'co_parroquia_uni'),
			'idPersonal' => array(self::BELONGS_TO, 'Personal', 'id_personal'),
			'tipoUn' => array(self::BELONGS_TO, 'TipoUnidad', 'tipo_unid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nb_unid' => 'Unidad',
			'direccion_unid' => 'Direccion',
			'coor_unid' => 'Coordenadas',
			'id_depen' => 'Dependencia',
			'idPersonal.nombre' => 'Personal Encargado',
			'tipoUn.nb_tipo' => 'Tipo',
			'coEdoUni.nb_edo' => 'Estado',
			'coCiudadUni.nb_ciudad' => 'Ciudad',
			'coMuncpUni.nb_muncp'=> 'Municipio',
			'coParroquiaUni.nb_parroquia'=> 'Parroquia',
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
		$criteria->compare('nb_unid',$this->nb_unid,true);
		$criteria->compare('direccion_unid',$this->direccion_unid,true);
		$criteria->compare('coor_unid',$this->coor_unid,true);
		$criteria->compare('id_depen',$this->id_depen);
		$criteria->compare('id_personal',$this->id_personal);
		$criteria->compare('tipo_unid',$this->tipo_unid);
		$criteria->compare('co_edo_uni',$this->co_edo_uni);
		$criteria->compare('co_ciudad_uni',$this->co_ciudad_uni);
		$criteria->compare('co_muncp_uni',$this->co_muncp_uni);
		$criteria->compare('co_parroquia_uni',$this->co_parroquia_uni);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
