<?php
/* @var $this ActosController */
/* @var $data Actos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_acto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_acto), array('view', 'id'=>$data->id_acto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
	<?php echo CHtml::encode($data->asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniformidad')); ?>:</b>
	<?php echo CHtml::encode($data->uniformidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presidido_por')); ?>:</b>
	<?php echo CHtml::encode($data->presidido_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_necesario')); ?>:</b>
	<?php echo CHtml::encode($data->material_necesario); ?>
	<br />

	*/ ?>

</div>
