<?php

/**
 * This is the model class for table "actos".
 *
 * The followings are the available columns in table 'actos':
 * @property integer $id_acto
 * @property string $asunto
 * @property string $lugar
 * @property string $fecha
 * @property string $hora
 * @property string $uniformidad
 * @property string $observaciones
 * @property string $presidido_por
 * @property string $material_necesario
 *
 * The followings are the available model relations:
 * @property Invitado[] $invitados
 */
class Actos extends CActiveRecord
{
    /**
    * devuelve un array para nuestro select de asunto
    *
    */
    public function getGenderOptions(){
    return array(
        'Jura de Bandera' => 'Jura de Bandera',
        'Toma de Posesión' => 'Toma de Posesión',
    'Despedida de Bandera' => 'Despedida de Bandera',
        'Patrona de Unidad' => 'Patrona de Unidad',
        'Entrega de Trofeos'=> 'Entrega de Trofeos',
        'Homenaje a los Caidos'=> 'Homenaje a los Caidos',
        'Renovación de Juramento'=> 'Renovación de Juramento',
        'Clausura de Curso'=> 'Clausura de Curso',
        'Cenas / Comidas'=> 'Cenas / Comidas',
        'Otros'=> 'Otros'

    );
}



	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('asunto, lugar, fecha, presidido_por', 'required'),
			array('hora', 'length', 'max'=>45),
            array('uniformidad, observaciones, material_necesario', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_acto, asunto, lugar, fecha, hora, uniformidad, observaciones, presidido_por, material_necesario', 'safe', 'on'=>'search'),
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
			'invitados' => array(self::HAS_MANY, 'Invitado', 'id_acto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_acto' => 'Id Acto',
			'asunto' => 'Asunto',
			'lugar' => 'Lugar',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'uniformidad' => 'Uniformidad',
			'observaciones' => 'Observaciones',
			'presidido_por' => 'Presidido Por',
			'material_necesario' => 'Material Necesario',
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

		$criteria->compare('id_acto',$this->id_acto);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('uniformidad',$this->uniformidad,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('presidido_por',$this->presidido_por,true);
		$criteria->compare('material_necesario',$this->material_necesario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
