<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_personas=>array('view','id'=>$model->id_personas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'View Personas', 'url'=>array('view', 'id'=>$model->id_personas)),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>Update Personas <?php echo $model->id_personas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
