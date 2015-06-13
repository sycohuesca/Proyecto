<?php
/* @var $this ActosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actoses',
);

$this->menu=array(
	array('label'=>'Create Actos', 'url'=>array('create')),
	array('label'=>'Manage Actos', 'url'=>array('admin')),
);
?>

<h1>Actoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
