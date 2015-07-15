<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Lista Personas', 'url'=>array('index')),
	array('label'=>'Administar Personas', 'url'=>array('admin')),
);
?>

<p class="h1 text-center">
<strong>Nueva Persona</strong></p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
