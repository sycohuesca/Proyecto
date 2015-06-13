<?php
/* @var $this UnidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidads',
);

$this->menu=array(
	array('label'=>'Create Unidad', 'url'=>array('create')),
	array('label'=>'Manage Unidad', 'url'=>array('admin')),
);
?>

<h1>Unidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
