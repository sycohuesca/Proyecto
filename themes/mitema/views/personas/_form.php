<?php
/* @var $this PersonasController */
/* @var $model Personas */
/* @var $form CActiveForm */
?>

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 <p class="note">Los campo con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'tratamiento', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'empleo', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'nombre', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'apellidos', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'dni', array('class'=>'span5')); ?>
 <?php echo $form->textAreaRow($model, 'cargos', array('class'=>'span5', 'rows'=>5)); ?>
<?php echo $form->textFieldRow($model, 'organismo', array('class'=>'span5')); ?>
 <?php echo $form->dropDownListRow($model,'id_unidad',CHtml::listData(Unidad::model()->findAll(), 'id_unidad', 'nombre_u')); ?>

<?php echo $form->textFieldRow($model, 'email', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'direccion', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'localidad', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'provincia', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'comunidad', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'cp', array('class'=>'span5')); ?>

<?php echo $form->textFieldRow($model, 'movil', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'cooporativo', array('class'=>'span5')); ?>
<div class="control-group ">
<?php echo $form->labelEx($model,'toma_posesion',array('class'=>'control-label')); ?>
<div class="controls">
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

    ?></div></div>


<div class="control-group ">
    <?php echo $form->labelEx($model,'fecha_de_cese',array('class'=>'control-label')); ?>
    <div class="controls">
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

    </div></div>


 <?php echo $form->textAreaRow($model, 'observaciones', array('class'=>'span5', 'rows'=>5)); ?>
<p class="h1 text-center">

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>$model->isNewRecord ? 'Nuevo' : 'Guardar')); ?></p>



<?php $this->endWidget(); ?>




