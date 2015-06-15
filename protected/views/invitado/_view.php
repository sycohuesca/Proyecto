<?php
/* @var $this InvitadoController */
/* @var $data Invitado */
?>

<div class="view">

	<b>Evento nº :</b>
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
		<b>Asistentes:</b>
<?php
$sql='SELECT count("id_persona") from invitado where id_acto='.$data->id_acto;
$resultado=Yii::app()->db->createCommand($sql)->queryScalar();
echo ($resultado)

;?>

	<?php
/*echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->id_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asiste')); ?>:</b>
	<?php echo CHtml::encode($data->asiste);
        */?>
	<br />


</div>
