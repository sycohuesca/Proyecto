<?php
/* @var $this PersonasController */
/* @var $model Personas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campo con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tratamiento'); ?>
		<?php echo $form->textField($model,'tratamiento',array('size'=>45,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleo'); ?>
		<?php echo $form->textField($model,'empleo',array('size'=>45,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'empleo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargos'); ?>
		<?php echo $form->textArea($model,'cargos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cargos'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'organismo'); ?>
		<?php echo $form->textField($model,'organismo',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'organismo'); ?>
	</div>

<div class="row">
		<label>Unidad</label>
		<?php echo $form->dropDownList($model,'id_unidad',CHtml::listData(Unidad::model()->findAll(), 'id_unidad', 'nombre')); ?>
		 <?php echo CHtml::link('Nueva Unidad',array('Unidad/create')); ?>
		<?php echo $form->error($model,'id_unidad'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provincia'); ?>
		<?php echo $form->textField($model,'provincia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'provincia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp'); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comunidad'); ?>
		<?php echo $form->textField($model,'comunidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'comunidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movil'); ?>
		<?php echo $form->textField($model,'movil'); ?>
		<?php echo $form->error($model,'movil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cooporativo'); ?>
		<?php echo $form->textField($model,'cooporativo'); ?>
		<?php echo $form->error($model,'cooporativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'toma_posesion'); ?>

			  <?php
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'toma_posesion',
   'value'=>date("d-m-Y", strtotime($model->toma_posesion)),
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>date('d-m-Y',time()),
    'dateFormat'=>'dd-mm-yy',
        'selectOtherMonths'=>true,
    'showAnim'=>'slide',
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
		<?php echo $form->labelEx($model,'fecha_de_cese'); ?>
				  <?php
  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_de_cese',
   'value'=>date("d-m-Y", strtotime($model->fecha_de_cese)),
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>date('d-m-Y',time()),
    'dateFormat'=>'dd-mm-yy',
        'selectOtherMonths'=>true,
    'showAnim'=>'slide',
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
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
