<?php

/**
 * This is the model class for table "personas".
 *
 * The followings are the available columns in table 'personas':
 * @property integer $id_personas
 * @property string $tratamiento
 * @property string $organismo
 * @property string $empleo
 * @property string $nombre
 * @property string $apellidos
 * @property string $dni
 * @property string $cargos
 * @property string $email
 * @property string $direccion
 * @property string $localidad
 * @property string $provincia
 * @property integer $cp
 * @property string $comunidad
 * @property integer $movil
 * @property integer $cooporativo
 * @property string $toma_posesion
 * @property string $fecha_de_cese
 * @property string $observaciones
 * @property integer $id_unidad
 *
 * The followings are the available model relations:
 * @property Invitado[] $invitados
 * @property Unidad $idUnidad
 */
class Personas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personas';
	}
public $unidad;
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apellidos', 'required'),
			array('cp, movil, cooporativo, id_unidad', 'numerical', 'integerOnly'=>true),
			array('tratamiento, empleo', 'length', 'max'=>20),
			array('nombre, apellidos, email, localidad, provincia, comunidad', 'length', 'max'=>45),
			array('dni', 'length', 'max'=>10),
			array('cargos,organismo, direccion', 'length', 'max'=>200),
            array('observaciones', 'length', 'max'=>500),
			array('toma_posesion, fecha_de_cese', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_personas, tratamiento, empleo, nombre, apellidos, dni, cargos, email, direccion, localidad, provincia, unidad, cp, comunidad, movil, unidad, organismo, cooporativo, toma_posesion, fecha_de_cese, observaciones, id_unidad', 'safe', 'on'=>'search'),
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
			'invitados' => array(self::HAS_MANY, 'Invitado', 'id_persona'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_personas' => 'Id Personas',
			'tratamiento' => 'Tratamiento',
            'organismo'=>'Organismo',
			'empleo' => 'Empleo',
			'nombre' => 'Nombre',
			'apellidos' => 'Apellidos',
			'dni' => 'Dni',
			'cargos' => 'Cargos',
			'email' => 'Email',
			'direccion' => 'Direccion',
			'localidad' => 'Localidad',
			'provincia' => 'Provincia',
			'cp' => 'Cp',
			'comunidad' => 'Comunidad',
			'movil' => 'Movil',
			'cooporativo' => 'Cooporativo',
			'toma_posesion' => 'Toma Posesion',
			'fecha_de_cese' => 'Fecha De Cese',
			'observaciones' => 'Observaciones',
			'id_unidad' => 'Unidad',
            'unidad'=>'Unidad',


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
        $criteria->with = array('idUnidad');
		$criteria->compare('id_personas',$this->id_personas);
		$criteria->compare('tratamiento',$this->tratamiento,true);
        $criteria->compare('organismo',$this->organismo,true);
		$criteria->compare('empleo',$this->empleo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('cargos',$this->cargos,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('localidad',$this->localidad,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('comunidad',$this->comunidad,true);
		$criteria->compare('movil',$this->movil);
		$criteria->compare('cooporativo',$this->cooporativo);
		$criteria->compare('toma_posesion',$this->toma_posesion,true);
		$criteria->compare('fecha_de_cese',$this->fecha_de_cese,true);
		$criteria->compare('observaciones',$this->observaciones,true);
        $criteria->compare('id_unidad',$this->id_unidad);
       $criteria->compare('idUnidad.nombre_u', $this->unidad, true );


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
             'sort'=>array(
          'attributes'=>array(
             'unidad'=>array(
                 'asc'=>'idUnidad.nombre_u ASC',
                 'desc'=>'idUnidad.nombre_u DESC',
               ),
             '*',
            ),

     ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
