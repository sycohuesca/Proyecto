<?php
/* @var $this InvitadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invitados',
);

$this->menu=array(

	array('label'=>'Administar Invitados', 'url'=>array('admin')),

);
?>
 <p class="h1 text-center">
     <strong>Lista Invitados</strong></p>


<?php

$this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
