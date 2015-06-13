<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Actos', 'url'=>array('index')),
	array('label'=>'Manage Actos', 'url'=>array('admin')),
);
?>

<h1>Create Actos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
