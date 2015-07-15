<?php
/* @var $this UnidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidades',
);

$this->menu=array(
	array('label'=>'Nueva Unidad', 'url'=>array('create')),
	array('label'=>'Administar Unidades', 'url'=>array('admin')),
);
?>

<p class="h1 text-center">
     <strong>Lista Unidades</strong></p>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
