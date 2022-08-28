<?php

/**
 * This is the model class for table "muncp".
 *
 * The followings are the available columns in table 'muncp':
 * @property integer $id
 * @property integer $co_muncp
 * @property string $nb_muncp
 * @property integer $co_ciudad
 * @property integer $estado
 * @property integer $ciudad
 *
 * The followings are the available model relations:
 * @property Ciudad $coCiudad
 * @property Parroquia[] $parroquias
 * @property Unidades[] $unidades
 */
class Muncp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'muncp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_muncp, nb_muncp, estado, ciudad', 'required'),
			array('co_muncp, co_ciudad, estado, ciudad', 'numerical', 'integerOnly'=>true),
			array('nb_muncp', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, co_muncp, nb_muncp, co_ciudad, estado, ciudad', 'safe', 'on'=>'search'),
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
			'coCiudad' => array(self::BELONGS_TO, 'Ciudad', 'co_ciudad'),
			'parroquias' => array(self::HAS_MANY, 'Parroquia', 'co_muncp'),
			'unidades' => array(self::HAS_MANY, 'Unidades', 'co_muncp_uni'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'co_muncp' => 'Co Muncp',
			'nb_muncp' => 'Municipio',
			'coCiudad.nb_ciudad' => 'Ciudad',
			'estado' => 'Estado',
			'ciudad' => 'Ciudad',
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
		$criteria->compare('co_muncp',$this->co_muncp);
		$criteria->compare('nb_muncp',$this->nb_muncp,true);
		$criteria->compare('co_ciudad',$this->co_ciudad);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('ciudad',$this->ciudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Muncp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
