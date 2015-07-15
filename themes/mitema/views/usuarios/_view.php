<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="index">
<b>

</b><br>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuario), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('privilegios')); ?>:</b>
	<?php echo CHtml::encode($data->privilegios); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_alta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_alta); ?>
	<br />
<b><?php echo CHtml::encode($data->getAttributeLabel('actualizado')); ?>:</b>
	<?php echo CHtml::encode(date("d-m-Y \a \l\a\s H:m:s", strtotime($data->actualizado))); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />
	<?php /*

<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
	*/ ?>

</div>
