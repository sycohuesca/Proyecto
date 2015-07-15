<?php
/* @var $this ActosController */
/* @var $model Actos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_acto'); ?>
		<?php echo $form->textField($model,'id_acto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asunto'); ?>
		<?php echo $form->dropDownList($model, 'asunto',
              $model->genderOptions,
              array('empty' => '--Selecciona un Asunto--'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uniformidad'); ?>
		<?php echo $form->textField($model,'uniformidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presidido_por'); ?>
		<?php echo $form->textField($model,'presidido_por',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material_necesario'); ?>
		<?php echo $form->textArea($model,'material_necesario',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
