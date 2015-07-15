<?php
/* @var $this UnidadController */
/* @var $model Unidad */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'unidad-form',
 'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'nombre_u', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'direccion', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'cp', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'localidad_u', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'comunidad_u', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'provincia', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'telefono', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'cooporativo', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'email', array('class'=>'span5')); ?>



<p class="h1 text-center">

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>$model->isNewRecord ? 'Nuevo' : 'Guardar')); ?></p>

<?php $this->endWidget(); ?>


