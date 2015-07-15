<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_personas=>array('view','id'=>$model->id_personas),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Personas', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->id_personas)),
	array('label'=>'Administar Personas', 'url'=>array('admin')),
);
?>
<p class="h1 text-center">
<strong>Actualizar Persona</strong></p>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
