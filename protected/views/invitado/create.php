<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Invitado', 'url'=>array('index')),
	array('label'=>'Manage Invitado', 'url'=>array('admin')),
);
?>

<h1>Create Invitado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
