<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actos'=>array('index'),
	'Admnistrar',
);

$this->menu=array(
	array('label'=>'Ver Actos', 'url'=>array('index')),
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Actos</h1>



<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'asunto',
        'presidido_por',
		'lugar',
		 array(
         'name'=>'fecha',
            'value'=> $model->fecha,
        ),
		'hora',
		'uniformidad',
		/*
		'observaciones',
		'presidido_por',
		'material_necesario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
