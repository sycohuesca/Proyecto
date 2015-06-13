<?php
/* @var $this InvitadoController */
/* @var $model Invitado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_invitado'); ?>
		<?php echo $form->textField($model,'id_invitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_acto'); ?>
		<?php echo $form->textField($model,'id_acto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_persona'); ?>
		<?php echo $form->textField($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asiste'); ?>
		<?php echo $form->textField($model,'asiste',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
