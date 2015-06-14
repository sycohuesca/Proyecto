<?php
/* @var $this ActosController */
/* @var $model Actos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->dropDownList($model, 'asunto',
              $model->genderOptions,
              array('empty' => '--Selecciona un Asunto--','maxlength'=>45));?>

		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		  <?php
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha',
   'value'=>date("d-m-Y", strtotime($model->fecha)),
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>date('d-m-Y',time()),
    'dateFormat'=>'dd-mm-yy',
    //'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
    //'buttonImageOnly'=>true,
    //'buttonText'=>'Fecha',
    'selectOtherMonths'=>true,
    'showAnim'=>'slide',
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true,
    'changeMonth' => 'true',
    'changeYear' => 'true',
    'minDate'=>'-20Y',
    'maxDate'=> "+20Y",
    ),
  ));

 ?>


		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presidido_por'); ?>
		<?php echo $form->textField($model,'presidido_por',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'presidido_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uniformidad'); ?>
		<?php echo $form->textField($model,'uniformidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'uniformidad'); ?>
	</div>





	<div class="row">
		<?php echo $form->labelEx($model,'material_necesario'); ?>
		<?php echo $form->textArea($model,'material_necesario',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'material_necesario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
