<?php
/* @var $this InvitadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistentes',
);

$this->menu=array(
	array('label'=>'Nuevo Asistente', 'url'=>array('create')),
	array('label'=>'Administar Asistentes', 'url'=>array('admin')),
    array('label'=>'Administar Asistentes', 'url'=>array('formulario')),
);
?>

<h1>Asistentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
