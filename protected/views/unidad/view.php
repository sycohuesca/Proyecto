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
	array('label'=>'Eliminar Unidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unidad),'confirm'=>'Estas seguro que quieres eliminar esta unidad ?')),
	array('label'=>'Adminstar Unidades', 'url'=>array('admin')),
);
?>

<h1>Ver unidad nº: <?php echo $model->id_unidad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unidad',
		'nombre',
		'direccion',
		'cp',
		'localidad',
		'comunidad',
		'provincia',
		'telefono',
		'cooporativo',
		'email',
	),
)); ?>
