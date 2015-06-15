<?php
/* @var $this PersonasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Administar Personas', 'url'=>array('admin')),

);
?>

<h1>Personas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
