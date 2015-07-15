<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id_usuario)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Estas seguro de eliminar este Usuario ?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<p class="h1 text-center">
<strong>Ver Usuario</strong></p>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'usuario',

		'email',


		'fecha_alta' ,
		'privilegios',
		'observaciones',
		array(
		'name'=>'actualizado',
            'type'=>'raw',
		'value'=>date("d-m-Y \a \l\a\s H:m:s", strtotime($model->actualizado))),
	),
)); ?>
