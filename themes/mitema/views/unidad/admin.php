<?php
/* @var $this UnidadController */
/* @var $model Unidad */

$this->breadcrumbs=array(
	'Unidades'=>array('index'),
	'Lista',
);

$this->menu=array(
	array('label'=>'Ver Unidades', 'url'=>array('index')),
	array('label'=>'Nueva Unidad', 'url'=>array('create')),
);


?>

 <p class="h1 text-center">
<strong>Administar Unidades</strong></p>





<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'unidad-grid',
    'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'nombre_u',
		'direccion',
		'localidad_u',
		'comunidad_u',
        'cp',
		/*
        'id_unidad',
		'provincia',
		'telefono',
		'cooporativo',
		'email',
		*/
		array(
		'header'=>'Opciones',
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
