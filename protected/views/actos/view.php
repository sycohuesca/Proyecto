<?php
/* @var $this ActosController */
/* @var $model Actos */

$this->breadcrumbs=array(
	'Actos'=>array('index'),
	$model->id_acto,
);

$this->menu=array(
	array('label'=>'Lista Actos', 'url'=>array('index')),
	array('label'=>'Nuevo Acto', 'url'=>array('create')),
	array('label'=>'Actualizar Acto', 'url'=>array('update', 'id'=>$model->id_acto)),
	array('label'=>'Eliminar Acto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acto),'confirm'=>'Estas seguro que quieres eliminar este acto ?')),
	array('label'=>'Administar Actos', 'url'=>array('admin')),
    array('label'=>'Invitar', 'url'=>array('invitar')),
);
?>

<h1>Ver Acto nº <?php echo $model->id_acto; ?></h1>
<p>Número de invitados: <?php
$sql='SELECT count("id_persona") from invitado where id_acto='.$model->id_acto;
$resultado=Yii::app()->db->createCommand($sql)->queryScalar();
echo ($resultado)

;?></p>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_acto',
		'asunto',
		'lugar',
        array(
         'label'=>'Fecha',
            'type'=>'raw',
            'value'=>date("d-m-Y", strtotime($model->fecha))
        ),
		'hora',
		'uniformidad',
		'observaciones',
		'presidido_por',
		'material_necesario',
	),
)); ?>
