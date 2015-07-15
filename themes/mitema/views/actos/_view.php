<?php
/* @var $this ActosController */
/* @var $data Actos */
?>

<div class="index">
<b><strong><?php echo CHtml::encode($data->asunto); ?>
       </strong></b>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php

$fecha=CHtml::encode($data->fecha);
    //date("d-m-Y", strtotime(CHtml::encode($data->fecha)))
    echo date("d-m-Y", strtotime($fecha));
    ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presidido_por')); ?>:</b>
	<?php echo CHtml::encode($data->presidido_por); ?>
	<br />
	<b>Asistentes :</b>
<?php
$sql='SELECT count("id_persona") from invitado where id_acto='.$data->id_acto;
$resultado=Yii::app()->db->createCommand($sql)->queryScalar();
echo ($resultado)

;?><br />

   <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Ver',
    'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
'url'=>Yii::app()->request->baseUrl.'/actos/'.$data->id_acto,

)); ?>
<?php
/* echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('uniformidad')); ?>:</b>
	<?php echo CHtml::encode($data->uniformidad); ?>
	<br />
<b><?php echo CHtml::encode($data->getAttributeLabel('id_acto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_acto), array('view', 'id'=>$data->id_acto)); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('material_necesario')); ?>:</b>
	<?php echo CHtml::encode($data->material_necesario); ?>
	<br />

	*/ ?>

</div>
