<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	$model->id_invitado,
);

$this->menu=array(
	array('label'=>'Lista Invitados', 'url'=>array('index')),
	array('label'=>'Nuevo Invitado', 'url'=>array('create')),
	array('label'=>'Actualizar Invitado', 'url'=>array('update', 'id'=>$model->id_invitado)),
	array('label'=>'Eliminar Invitado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_invitado),'confirm'=>'Estas seguro de eliminar este Invitado?')),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),
);
?>

<h1>Ver Invitado nº <?php echo $model->id_invitado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'id_invitado',
		array(
            'name'=>'asunt',
            'type'=>'raw',
            'value'=>$model->idActo->asunto,
        ),
       array(
            'name'=>'fecha',
           'type'=>'raw',
            'value'=>$model->idActo->fecha,
        ),
        array(
            'name'=>'lugar',
            'type'=>'raw',
            'value'=>$model->idActo->lugar,
        ),
      array(
            'name'=>'nombre',
          'type'=>'raw',
            'value'=>$model->idPersona->nombre,
        ),
         array(
            'name'=>'apellidos',
             'type'=>'raw',
            'value'=>$model->idPersona->apellidos,
        ),
		'asiste',
	),
)); ?>
