<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	$model->id_unidad=>array('view','id'=>$model->id_unidad),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver Unidades', 'url'=>array('index')),
	array('label'=>'Nueva Unidad', 'url'=>array('create')),
	array('label'=>'Ver Unidad', 'url'=>array('view', 'id'=>$model->id_unidad)),
	array('label'=>'Adminstrar Unidades', 'url'=>array('admin')),
);
?>

<p class="h1 text-center">
<strong>Actualizar Unidad</strong></p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
