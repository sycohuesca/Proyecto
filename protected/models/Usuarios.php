<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id_usuario
 * @property string $usuario
 * @property string $contrase単a
 * @property string $correoElectronico
 * @property string $fecha_alta
 * @property integer $privilegios
 * @property string $observaciones
 * @property string $actualizado
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, contrase単a, correoElectronico, fecha_alta, privilegios, observaciones, actualizado', 'required'),
			array('privilegios', 'numerical', 'integerOnly'=>true),
			array('usuario, contrase単a, correoElectronico', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, usuario, contrase単a, correoElectronico, fecha_alta, privilegios, observaciones, actualizado', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'contrase単a' => 'Contrase祓a',
			'correoElectronico' => 'Correo Electronico',
			'fecha_alta' => 'Fecha Alta',
			'privilegios' => 'Privilegios',
			'observaciones' => 'Observaciones',
			'actualizado' => 'Actualizado',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('contrase単a',$this->contrase単a,true);
		$criteria->compare('correoElectronico',$this->correoElectronico,true);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('privilegios',$this->privilegios);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('actualizado',$this->actualizado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
