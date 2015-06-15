<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Asistentes',
);

$this->menu=array(
	array('label'=>'List Invitado', 'url'=>array('index')),
	array('label'=>'Create Invitado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#invitado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asistentes</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invitado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'name'=>'Asunto',
            'value'=>'$data->idActo->asunto',
        ),
        array(
            'name'=>'Fecha',
            'value'=>'$data->idActo->fecha',
        ),
        array(
            'name'=>'Nombre',
            'value'=>'$data->idPersona->nombre',
        ),
        array(
            'name'=>'Apellidos',
            'value'=>'$data->idPersona->apellidos',
        ),
        array(
            'name'=>'Localidad',
            'value'=>'$data->idPersona->localidad',
        ),

		'asiste',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
