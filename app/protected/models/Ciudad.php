<?php

/**
 * This is the model class for table "ciudad".
 *
 * The followings are the available columns in table 'ciudad':
 * @property integer $id
 * @property integer $co_ciudad
 * @property string $nb_ciudad
 * @property integer $co_edo
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Estado $coEdo
 * @property Muncp[] $muncps
 * @property Unidades[] $unidades
 */
class Ciudad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_ciudad, nb_ciudad, co_edo, estado', 'required'),
			array('co_ciudad, co_edo, estado', 'numerical', 'integerOnly'=>true),
			array('nb_ciudad', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, co_ciudad, nb_ciudad, co_edo, estado', 'safe', 'on'=>'search'),
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
			'coEdo' => array(self::BELONGS_TO, 'Estado', 'co_edo'),
			'muncps' => array(self::HAS_MANY, 'Muncp', 'co_ciudad'),
			'unidades' => array(self::HAS_MANY, 'Unidades', 'co_ciudad_uni'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'co_ciudad' => 'Co Ciudad',
			'nb_ciudad' => 'Ciudad',
			'coEdo.nb_edo' => 'Estado',
			'estado' => 'Estado',
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
		$criteria->compare('co_ciudad',$this->co_ciudad);
		$criteria->compare('nb_ciudad',$this->nb_ciudad,true);
		$criteria->compare('co_edo',$this->co_edo);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ciudad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
