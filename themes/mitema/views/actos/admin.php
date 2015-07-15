<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actos'=>array('index'),
	'Admnistrar',
);

$this->menu=array(
	array('label'=>'Ver Actos', 'url'=>array('index')),
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
    array('label'=>'Invitados', 'url'=>array('invitado/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

 <p class="h1 text-center">
<strong>Administar Actos</strong></p>




<?php $this->renderPartial('_admin',array('model'=>$model,)); ?>

