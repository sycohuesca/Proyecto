<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Innvitados', 'url'=>array('index')),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),
);
?>

<h1>Nuevo Invitado</h1>



<?php

$personas=new Personas('search');

 $this->renderPartial('/personas/_admin',array(
	'model'=>$personas,
));

?>
