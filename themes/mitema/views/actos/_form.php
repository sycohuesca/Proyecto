<?php
/* @var $this ActosController */
/* @var $model Actos */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'actos-form',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.

)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model,'asunto',$model->genderOptions,
              array('empty' => '--Selecciona un Asunto--','maxlength'=>45));?>

<?php echo $form->textFieldRow($model, 'lugar', array('class'=>'span5')); ?>

<div class="control-group ">
<?php echo $form->labelEx($model,'fecha',array('class'=>'control-label')); ?>
<div class="controls">
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
        'selectOtherMonths'=>true,
    'showAnim'=>'slide',
      'showOtherMonths'=>true,
    'changeMonth' => 'true',
    'changeYear' => 'true',
    'minDate'=>'-20Y',
    'maxDate'=> "+20Y",
    ),
  ));

    ?></div></div>

<?php echo $form->textFieldRow($model, 'hora', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'presidido_por', array('class'=>'span5')); ?>
 <?php echo $form->textAreaRow($model, 'uniformidad', array('class'=>'span5', 'rows'=>5)); ?>
 <?php echo $form->textAreaRow($model, 'material_necesario', array('class'=>'span5', 'rows'=>5)); ?>
 <?php echo $form->textAreaRow($model, 'observaciones', array('class'=>'span5', 'rows'=>5)); ?>

<p class="h1 text-center">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>$model->isNewRecord ? 'Nuevo' : 'Guardar')); ?></p>

	<?php $this->endWidget(); ?>
