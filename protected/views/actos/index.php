<?php
/* @var $this ActosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actos',
);

$this->menu=array(
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
	array('label'=>'Administrar Actos', 'url'=>array('admin')),
);
?>

<h1>Actos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
