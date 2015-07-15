<?php
/* @var $this UnidadController */
/* @var $data Unidad */
?>

<?php if ($data->id_unidad!=1) {
   ?>
    <div class="index">
        <b><strong><?php echo CHtml::encode($data->nombre_u); ?></strong></b>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad_u')); ?>:</b>
	<?php echo CHtml::encode($data->localidad_u); ?>
	<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comunidad_u')); ?>:</b>
	<?php echo CHtml::encode($data->comunidad_u); ?>
	<br />

      <?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Ver',
    'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
'url'=>Yii::app()->request->baseUrl.'/unidad/'.$data->id_unidad,

)); ?>
         </div>
 <?php
};
?>



