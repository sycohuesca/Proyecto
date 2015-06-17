<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actos'=>array('index'),
	$model->id_acto=>array('view','id'=>$model->id_acto),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Actos', 'url'=>array('index')),
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
	array('label'=>'Ver Acto', 'url'=>array('view', 'id'=>$model->id_acto)),
	array('label'=>'Administrar Actos', 'url'=>array('admin')),
    array('label'=>'Nuevo Invitado', 'url'=>array('invitar','id'=>$model->id_acto)),
    array('label'=>'Invitados', 'url'=>array('invitado/admin')),
);
?>

<h1>Actualizar Actos nº <?php echo $model->id_acto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
