<?php

/**
 * This is the model class for table "unidad".
 *
 * The followings are the available columns in table 'unidad':
 * @property integer $id_unidad
 * @property string $nombre
 * @property string $direccion
 * @property integer $cp
 * @property string $localidad
 * @property string $comunidad
 * @property string $provincia
 * @property integer $telefono
 * @property integer $cooporativo
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Personas[] $personases
 */
class Unidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, cp, localidad, comunidad, provincia, telefono, cooporativo, email', 'required'),
			array('cp, telefono, cooporativo', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion, localidad, provincia, email', 'length', 'max'=>45),
			array('comunidad', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_unidad, nombre, direccion, cp, localidad, comunidad, provincia, telefono, cooporativo, email', 'safe', 'on'=>'search'),
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
			'personases' => array(self::HAS_MANY, 'Personas', 'id_unidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_unidad' => 'Id Unidad',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'cp' => 'Cp',
			'localidad' => 'Localidad',
			'comunidad' => 'Comunidad',
			'provincia' => 'Provincia',
			'telefono' => 'Telefono',
			'cooporativo' => 'Cooporativo',
			'email' => 'Email',
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

		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('localidad',$this->localidad,true);
		$criteria->compare('comunidad',$this->comunidad,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('cooporativo',$this->cooporativo);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
