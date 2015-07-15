<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Administrar',
);

$this->menu=array(

    array('label'=>'Ver Actos', 'url'=>array('actos/index')),
);

?>
 <p class="h1 text-center">
<strong>Administar Invitados</strong></p>




<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'invitado-grid',
	'dataProvider'=>$model->search(),
    'type'=>'striped bordered condensed',
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
            'name'=>'empleo',
            'value'=>'$data->idPersona->empleo',
        ),

      array(
            'name'=>'nombre',
            'value'=>'$data->idPersona->nombre',
        ),
         array(
            'name'=>'apellidos',
            'value'=>'$data->idPersona->apellidos',
        ),
          array(
            'name'=>'cargos',
            'value'=>'$data->idPersona->cargos',
        ),
          array(
            'name'=>'organismo',
            'value'=>'$data->idPersona->organismo',
        ),

		'asiste',
		array(
		'header'=>'Opciones',
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
));



?>
