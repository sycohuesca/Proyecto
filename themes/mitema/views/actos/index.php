<?php
/* @var $this ActosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actos',
);

$this->menu=array(
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
	array('label'=>'Administrar Actos', 'url'=>array('admin')),
    array('label'=>'Invitados', 'url'=>array('invitado/admin')),
);
?>

 <p class="h1 text-center">
     <strong>Lista Actos</strong></p>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
