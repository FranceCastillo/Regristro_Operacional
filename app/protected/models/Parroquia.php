<?php

/**
 * This is the model class for table "parroquia".
 *
 * The followings are the available columns in table 'parroquia':
 * @property integer $id
 * @property integer $co_parroquia
 * @property string $nb_parroquia
 * @property integer $co_muncp
 * @property integer $estado
 * @property integer $ciudad
 * @property integer $muncp
 *
 * The followings are the available model relations:
 * @property Muncp $coMuncp
 * @property Unidades[] $unidades
 */
class Parroquia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'parroquia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_parroquia, nb_parroquia, co_muncp, estado, ciudad, muncp', 'required'),
			array('co_parroquia, co_muncp, estado, ciudad, muncp', 'numerical', 'integerOnly'=>true),
			array('nb_parroquia', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, co_parroquia, nb_parroquia, co_muncp, estado, ciudad, muncp', 'safe', 'on'=>'search'),
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
			'coMuncp' => array(self::BELONGS_TO, 'Muncp', 'co_muncp'),
			'unidades' => array(self::HAS_MANY, 'Unidades', 'co_parroquia_uni'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'co_parroquia' => 'Co Parroquia',
			'nb_parroquia' => 'Parroquia',
			'coMuncp.nb_muncp' => 'Municipio',
			'estado' => 'Estado',
			'ciudad' => 'Ciudad',
			'muncp' => 'Muncp',
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
		$criteria->compare('co_parroquia',$this->co_parroquia);
		$criteria->compare('nb_parroquia',$this->nb_parroquia,true);
		$criteria->compare('co_muncp',$this->co_muncp);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('muncp',$this->muncp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parroquia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
