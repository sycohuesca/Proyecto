<?php
/* @var $this InvitadoController */
/* @var $data Invitado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_invitado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_invitado), array('view', 'id'=>$data->id_invitado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_acto')); ?>:</b>
	<?php echo CHtml::encode($data->id_acto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asiste')); ?>:</b>
	<?php echo CHtml::encode($data->asiste); ?>
	<br />


</div>
