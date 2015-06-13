<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidads'=>array('index'),
	$model->id_unidad,
);

$this->menu=array(
	array('label'=>'List Unidad', 'url'=>array('index')),
	array('label'=>'Create Unidad', 'url'=>array('create')),
	array('label'=>'Update Unidad', 'url'=>array('update', 'id'=>$model->id_unidad)),
	array('label'=>'Delete Unidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unidad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>View Unidad #<?php echo $model->id_unidad; ?></h1>

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
