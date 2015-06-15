<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Ver Actos', 'url'=>array('index')),
	array('label'=>'Administrar Actos', 'url'=>array('admin')),
    array('label'=>'Asistentes', 'url'=>array('invitado/admin')),
);
?>

<h1>Nuevo Acto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
