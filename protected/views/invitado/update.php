<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	$model->id_invitado=>array('view','id'=>$model->id_invitado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Invitado', 'url'=>array('index')),
	array('label'=>'Create Invitado', 'url'=>array('create')),
	array('label'=>'View Invitado', 'url'=>array('view', 'id'=>$model->id_invitado)),
	array('label'=>'Manage Invitado', 'url'=>array('admin')),
);
?>

<h1>Update Invitado <?php echo $model->id_invitado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
