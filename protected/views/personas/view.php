<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_personas,
);

$this->menu=array(
	array('label'=>'Lista Personas', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Actualizar Persona', 'url'=>array('update', 'id'=>$model->id_personas)),
	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_personas),'confirm'=>'Estas Seguro de elimniar esta Persona ?')),
	array('label'=>'Administar Personas', 'url'=>array('admin')),
);
?>

<h1>Ver Persona nº <?php echo $model->id_personas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_personas',
		'tratamiento',
		'empleo',
		'nombre',
		'apellidos',
		'dni',
		'cargos',
        array(
        'name'=>'Unidad',
            'type'=>'raw',
            'value'=>$model->idUnidad->nombre
        ),
		'email',
		'direccion',
		'localidad',
		'provincia',
		'cp',
		'comunidad',
		'movil',
		'cooporativo',
		'toma_posesion',
		'fecha_de_cese',
		'observaciones',

	),
)); ?>
