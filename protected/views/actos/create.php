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
);
?>

<h1>Create Actos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
