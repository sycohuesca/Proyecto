<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'privilegios'); ?>
		<?php echo $form->textField($model,'privilegios'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'fecha_alta'); ?>
		<?php
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_alta',
   'value'=>date("d-m-Y", strtotime($model->fecha_alta)),
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
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
