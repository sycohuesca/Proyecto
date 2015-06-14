<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Ver Unidades', 'url'=>array('index')),
	array('label'=>'Adminstrar Unidades', 'url'=>array('admin')),
);
?>

<h1>Nueva Unidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
