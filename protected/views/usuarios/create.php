<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Administar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Nuevo Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
