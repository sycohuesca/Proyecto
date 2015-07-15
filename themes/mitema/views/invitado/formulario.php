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

<h1>Administrar Asistentes</h1>
<script type="text/javascript">
   function pulsar (){
  var datosm = $('#invitado-grid').keepSelectionData();

    $.ajax({ url: 'borrar' , type: 'post', data: { items: datosm} });





   };
</script>

<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invitado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'selectableRows'=>2,

	'columns'=>array(
        array('class'=>'CCheckBoxColumn'),

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
$dummy = new EKeepSelection('#invitado-grid');


?>
<button id="boton" onclick="pulsar()">Pulsa aqui</button>
