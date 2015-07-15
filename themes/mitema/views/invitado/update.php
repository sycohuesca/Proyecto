<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	$model->id_invitado=>array('view','id'=>$model->id_invitado),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Invitado', 'url'=>array('view', 'id'=>$model->id_invitado)),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),
);
?>
<p class="h1 text-center">
    <strong>Actualizar Invitado </strong></span></p>



<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'invitado-form',
	'id'=>'verticalForm',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
<b>El invitado
<?php echo $model->idPersona->empleo." ";
echo $model->idPersona->nombre." ";
echo $model->idPersona->apellidos." "; ?></b>
<b>asiste al acto :</b>


	<br />
    <?php echo $form->dropDownListRow($model, 'asiste', array("si"=>"Si",'no'=>'No')); ?>


<p class="h1 text-center">

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>'Guardar')); ?></p>




<?php $this->endWidget(); ?>
