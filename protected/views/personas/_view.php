<?php
/* @var $this PersonasController */
/* @var $data Personas */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->tratamiento); ?>
        <?php echo CHtml::encode($data->empleo); ?>
        <?php echo CHtml::encode($data->nombre); ?>
        <?php echo CHtml::encode($data->apellidos); ?></b>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargos')); ?>:</b>
	<?php echo CHtml::encode($data->cargos); ?>
	<br />
<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
     <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('movil')); ?>:</b>
	<?php echo CHtml::encode($data->movil); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad')); ?>:</b>
	<?php echo CHtml::encode($data->localidad); ?>
	<br />
    <b>Unidad :</b>
	<?php echo CHtml::encode($data->idUnidad->nombre); ?>
	<br />
	<?php /*
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_personas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_personas), array('view', 'id'=>$data->id_personas)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad')); ?>:</b>
	<?php echo CHtml::encode($data->localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comunidad')); ?>:</b>
	<?php echo CHtml::encode($data->comunidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movil')); ?>:</b>
	<?php echo CHtml::encode($data->movil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cooporativo')); ?>:</b>
	<?php echo CHtml::encode($data->cooporativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toma_posesion')); ?>:</b>
	<?php echo CHtml::encode($data->toma_posesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_de_cese')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_de_cese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	*/ ?>

</div>
