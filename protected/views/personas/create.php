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

<h1>Nueva Persona</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
