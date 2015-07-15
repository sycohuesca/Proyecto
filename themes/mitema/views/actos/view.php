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
    array('label'=>'Invitados', 'url'=>array('invitado/admin')),
     array('label'=>'Nuevo Invitado', 'url'=>array('invitado/create','idActo'=>$model->id_acto)),
);
?>

<p class="h1 text-center">
<strong>Ver Acto</strong></p>

<p><strong>Número de invitados: </strong><?php
$sql='SELECT count("id_persona") from invitado where id_acto='.$model->id_acto;
$resultado=Yii::app()->db->createCommand($sql)->queryScalar();
echo ($resultado)

;?></p>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
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

		'presidido_por',
		'material_necesario',
        'observaciones',
	),
)); ?>
<p class="h1 text-center">
    <strong>Invitados  <span class="badge"><?php echo $resultado;?></strong></span></p>

<ul>
<?php
$personas=Invitado::getPersonas($model->id_acto);

foreach($personas as $data){ ?>
    <li>
        <?php echo $data->idPersona->empleo.' '.$data->idPersona->nombre." ".$data->idPersona->apellidos.'   ';
   $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Ver',
       'size'=>'small',
    'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
'url'=>Yii::app()->request->baseUrl.'/personas/'.$data->id_persona,));
   echo '</li>';
}
	 ?>
</ul>

