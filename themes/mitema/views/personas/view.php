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
<p class="h1 text-center">
<strong>Ver Persona</strong></p>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_personas',
		'tratamiento',
		'empleo',
		'nombre',
		'apellidos',
		'dni',
		'cargos',
        'organismo',
        array(
        'name'=>'unidad',
            'type'=>'raw',
            'value'=>$model->idUnidad->nombre_u
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
