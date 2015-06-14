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

<h1>Unidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
