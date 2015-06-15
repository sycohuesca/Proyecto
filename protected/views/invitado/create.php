<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Asistentes', 'url'=>array('index')),
	array('label'=>'Administar Asistentes', 'url'=>array('admin')),
);
?>

<h1>Crear Asistentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
