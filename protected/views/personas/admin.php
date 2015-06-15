<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Personas', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administar Personas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'empleo',
		'nombre',
		'apellidos',
		'dni',
        array(
            'name'=>'Unidad',
            'value'=>'$data->idUnidad->nombre',
        ),
        'comunidad',

        'localidad',
		/*
		'cargos',
		'email',
		'direccion',
		'localidad',
		'provincia',
		'cp',
		'comunidad',
		'movil',
		'cooporativo',
		'toma_posesion',
		'fecha_de_cese',
		'observaciones',
		'id_unidad',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
