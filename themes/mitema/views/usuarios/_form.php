<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'usuarios-form',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'usuario', array('class'=>'span5')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'email', array('class'=>'span5')); ?>
<?php echo $form->dropDownListRow($model, 'privilegios', array('usuario'=>'Usuario','administrador'=>'Administrador')); ?>


 <?php echo $form->textAreaRow($model, 'observaciones', array('class'=>'span5', 'rows'=>5)); ?>

 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>$model->isNewRecord ? 'Nuevo' : 'Guardar')); ?></p>



<?php $this->endWidget(); ?>

