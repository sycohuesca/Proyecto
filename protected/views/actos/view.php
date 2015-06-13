<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actoses'=>array('index'),
	$model->id_acto,
);

$this->menu=array(
	array('label'=>'List Actos', 'url'=>array('index')),
	array('label'=>'Create Actos', 'url'=>array('create')),
	array('label'=>'Update Actos', 'url'=>array('update', 'id'=>$model->id_acto)),
	array('label'=>'Delete Actos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actos', 'url'=>array('admin')),
);
?>

<h1>View Actos #<?php echo $model->id_acto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_acto',
		'asunto',
		'lugar',
		'fecha',
		'hora',
		'uniformidad',
		'observaciones',
		'presidido_por',
		'material_necesario',
	),
)); ?>
