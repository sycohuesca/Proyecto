<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Asistentes',
);

$this->menu=array(
	array('label'=>'Listar Invitado', 'url'=>array('index')),
	array('label'=>'Nuevo Invitado', 'url'=>array('create')),
);

?>

<h1>Administrar Invitados</h1>


<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invitado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,

	'columns'=>array(


		array(
            'name'=>'asunt',
            'value'=>'$data->idActo->asunto',
        ),
       array(
            'name'=>'fecha',
            'value'=>'$data->idActo->fecha',
        ),
        array(
            'name'=>'lugar',
            'value'=>'$data->idActo->lugar',
        ),
      array(
            'name'=>'nombre',
            'value'=>'$data->idPersona->nombre',
        ),
         array(
            'name'=>'apellidos',
            'value'=>'$data->idPersona->apellidos',
        ),

		'asiste',
		array(
			'class'=>'CButtonColumn',
		),
	),
));



?>
