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
    array('label'=>'Invitados', 'url'=>array('invitado/admin')),
     array('label'=>'Nuevo Invitado', 'url'=>array('invitado/admin')),
);
?>

<p class="h1 text-center">
<strong>Nuevo Acto</strong></p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
