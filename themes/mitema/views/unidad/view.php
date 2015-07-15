<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->id_unidad,
);

$this->menu=array(
	array('label'=>'Lista Unidades', 'url'=>array('index')),
	array('label'=>'Nueva Unidad', 'url'=>array('create')),
	array('label'=>'Actualizar Unidad', 'url'=>array('update', 'id'=>$model->id_unidad)),
	array('label'=>'Eliminar Unidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unidad),'confirm'=>'Estas seguro que quieres eliminar esta unidad, también se borrarán las personas que pertenecen a esa unidad ?')),
	array('label'=>'Adminstar Unidades', 'url'=>array('admin')),
);
?>

<p class="h1 text-center">
<strong>Ver Unidad</strong></p>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unidad',
		'nombre_u',
		'direccion',
		'cp',
		'localidad_u',
		'comunidad_u',
		'provincia',
		'telefono',
		'cooporativo',
		'email',
	),
)); ?>

