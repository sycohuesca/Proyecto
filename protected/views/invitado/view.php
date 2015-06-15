<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	$model->id_invitado,
);

$this->menu=array(
	array('label'=>'Lista Asistentes', 'url'=>array('index')),
	array('label'=>'Create Invitado', 'url'=>array('create')),
	array('label'=>'Update Invitado', 'url'=>array('update', 'id'=>$model->id_invitado)),
	array('label'=>'Delete Invitado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_invitado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Invitado', 'url'=>array('admin')),
);
?>

<h1>View Invitado #<?php echo $model->id_invitado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_invitado',
		'id_acto',
		'id_persona',
		'asiste',
	),
)); ?>
