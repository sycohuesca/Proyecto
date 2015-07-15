<?php
/* @var $this InvitadoController */
/* @var $data Invitado */
?>

<div class="index">


	<b>Invitado nº :</b>
	<?php echo CHtml::link(CHtml::encode($data->id_invitado), array('view', 'id'=>$data->id_invitado)); ?>
	<br />

	<b>Asunto:</b>
	<?php echo CHtml::encode($data->idActo->asunto); ?>
	<br />
	<b>Lugar:</b>
	<?php echo CHtml::encode($data->idActo->lugar); ?>
	<br />
	<b>Fecha:</b>
	<?php echo CHtml::encode($data->idActo->fecha); ?>
	<br />


	<?php
/*echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asiste')); ?>:</b>
	<?php echo CHtml::encode($data->asiste);
        */?>
	<br />


</div>
