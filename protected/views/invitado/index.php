<?php
/* @var $this InvitadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invitados',
);

$this->menu=array(
	array('label'=>'Nuevo Invitado', 'url'=>array('create')),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),

);
?>

<h1>Invitados</h1>

<?php

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
