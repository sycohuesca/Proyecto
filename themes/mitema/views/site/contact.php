<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contacto',
);
?>
<p class="h1 text-center">
<strong>Contacto</strong></p>


<?php if(Yii::app()->user->hasFlash('contact')): ?>
<div class="alert alert-success" role="alert">
<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>





<?php else: ?>




<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<p>
Si tiene cualquier pregunta, esta es la seccion adecuada. En breve nos pondres en contacto con Ud.
</p>


	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldRow($model, 'name', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'email', array('class'=>'span5')); ?>
<?php echo $form->textFieldRow($model, 'subject', array('class'=>'span5')); ?>
 <?php echo $form->textAreaRow($model, 'body', array('class'=>'span5', 'rows'=>5)); ?>



	<?php if(CCaptcha::checkRequirements()): ?>


		<?php $this->widget('CCaptcha'); ?>

            <?php echo $form->textFieldRow($model, 'verifyCode', array('class'=>'span5')); ?>

<p>Por favor introduce las letras que muestra la imagen.
		<br/>Son sensibles a mayusculas /minusncualas</p>
		<?php echo $form->error($model,'verifyCode'); ?>

	<?php endif; ?>

	<p class="h1 text-center">

    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','size'=>'large', 'type'=>'success', 'label'=>'Enviar')); ?></p>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
