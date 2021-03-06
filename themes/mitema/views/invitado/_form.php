<?php
/* @var $this InvitadoController */
/* @var $model Invitado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invitado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_acto'); ?>
		<?php echo $form->dropDownList($model,'id_acto',CHtml::listData(Actos::model()->findAll(), 'id_acto', 'asunto'),array("empty"=>"Escoge Actos o creala antes")); ?>
		<?php echo $form->error($model,'id_acto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_persona'); ?>
		<?php echo $form->dropDownList($model,'id_persona',CHtml::listData(Personas::model()->findAll(), 'id_persona', 'nombre'),array("empty"=>"Escoge Actos o creala antes")); ?>
		<?php echo $form->error($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asiste'); ?>
		<?php echo $form->dropDownList($model,'asiste',array("si"=>"Si",'no'=>'No')); ?>
		<?php echo $form->error($model,'asiste'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
