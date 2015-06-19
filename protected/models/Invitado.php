<?php

/**
 * This is the model class for table "invitado".
 *
 * The followings are the available columns in table 'invitado':
 * @property integer $id_invitado
 * @property integer $id_acto
 * @property integer $id_persona
 * @property string $asiste
 *
 * The followings are the available model relations:
 * @property Actos $idActo
 * @property Personas $idPersona
 */
class Invitado extends CActiveRecord
{
    public $asunt, $lugar, $fecha, $nombre, $apellidos;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invitado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_acto, id_persona', 'required'),
			array('id_acto, id_persona', 'numerical', 'integerOnly'=>true),
			array('asiste', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_invitado, asunt, lugar, fecha, nombre, apellidos,
            id_acto, id_persona, asiste', 'safe', 'on'=>'search'),
		);
	}
    public function repetidos($idActo, $idPerosna){

     $resul=Invitado::model()->findAll("id_acto=$idActo");
$salida=true;
foreach($resul as $re){
    if ($re->id_persona==40){
        $salida=false;
    }
}
return $salida;

    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idActo' => array(self::BELONGS_TO, 'Actos', 'id_acto'),
			'idPersona' => array(self::BELONGS_TO, 'Personas', 'id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_invitado' => 'Id Invitado',
			'id_acto' => 'Id Acto',
			'id_persona' => 'Id Persona',
			'asiste' => 'Asiste',
            'asunt'=>'Asunto',
            'lugar'=>"Lugar",
            'fecha'=>'Fecha',
            'nombre'=>'Nombre',
            'apellidos'=>'Apellidos',
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
        $criteria->with = array('idActo','idPersona');

		$criteria->compare('id_invitado',$this->id_invitado);
		$criteria->compare('id_acto',$this->id_acto);
		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('asiste',$this->asiste,true);
        $criteria->compare('idActo.asunto', $this->asunt, true );
        $criteria->compare('idActo.fecha', $this->fecha, true );
        $criteria->compare('idActo.lugar', $this->lugar, true );
        $criteria->compare('idPersona.nombre', $this->nombre, true );
        $criteria->compare('idPersona.apellidos', $this->apellidos, true );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,

		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Invitado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getPersonas($idActo){
        $personas=Invitado::model()->findAll(array('condition'=>"id_acto=$idActo"));

        return $personas;
    }
}
