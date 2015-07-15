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

<p class="h1 text-center">
<strong>Nueva Unidad</strong></p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
