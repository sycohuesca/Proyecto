<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administar',
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

 <p class="h1 text-center">
<strong>Administar Usuarios</strong></p>





<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'usuarios-grid',
    'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usuario',
		'usuario',
        'email',
        'privilegios',
		'fecha_alta',
		'actualizado',



		/*
		'observaciones',
		'actualizado',
		*/
		array(
		'header'=>'Opciones',
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
