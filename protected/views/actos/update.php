<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actoses'=>array('index'),
	$model->id_acto=>array('view','id'=>$model->id_acto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actos', 'url'=>array('index')),
	array('label'=>'Create Actos', 'url'=>array('create')),
	array('label'=>'View Actos', 'url'=>array('view', 'id'=>$model->id_acto)),
	array('label'=>'Manage Actos', 'url'=>array('admin')),
);
?>

<h1>Update Actos <?php echo $model->id_acto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
