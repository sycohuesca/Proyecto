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

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adminsitar Unidades</h1>



<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'unidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'nombre',
		'direccion',

		'localidad',
		'comunidad',
        'cp',
		/*
        'id_unidad',
		'provincia',
		'telefono',
		'cooporativo',
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
