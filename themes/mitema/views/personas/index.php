<?php
/* @var $this PersonasController */
/* @var $dataProvider CActiveDataProvider
*/
$this->breadcrumbs=array('Personas');

$this->menu=array(
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Administar Personas', 'url'=>array('admin')),

);
?>

 <p class="h1 text-center">
     <strong>Lista Personas</strong></p>

<?php

$this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
