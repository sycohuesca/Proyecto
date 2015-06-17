<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	$model->id_invitado=>array('view','id'=>$model->id_invitado),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Invitados', 'url'=>array('index')),
	array('label'=>'Nuevo Invitado', 'url'=>array('create')),
	array('label'=>'Ver Invitado', 'url'=>array('view', 'id'=>$model->id_invitado)),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),
);
?>

<h1>Actualizar Invitado <?php echo $model->id_invitado; ?></h1>

<b>El invitado
<?php echo $model->idPersona->empleo;
echo $model->idPersona->nombre;
echo $model->idPersona->apellidos; ?></b>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invitado-form',
	'enableAjaxValidation'=>false,
)); ?>
<b>Asiste al acto :</b>


	<br />
<?php echo $form->dropDownList($model,'asiste',array("si"=>"Si",'no'=>'No')); ?>


<div class="row button">
<?php echo CHtml::submitButton('Guardar'); ?>
</div>
</div>
<?php $this->endWidget(); ?>
