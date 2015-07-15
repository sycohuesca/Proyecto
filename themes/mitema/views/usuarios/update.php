<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id_usuario)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<p class="h1 text-center">
<strong>Actualizar Usuario</strong></p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
