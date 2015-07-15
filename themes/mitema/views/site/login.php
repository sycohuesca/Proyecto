<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Entrar';
$this->breadcrumbs=array(
	'Entrar',
);
?>
 <p class="h1 text-center">
     <strong>Autorización</strong></p>




<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<p>Rellena tu usuario y password de sessión:</p>
	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

<?php echo $form->textFieldRow($model, 'username', array('class'=>'span5')); ?>
<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span5')); ?>
<?php echo $form->checkboxRow($model, 'rememberMe'); ?>
<p class="h1 text-center">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'success' ,'label'=>'Entar')); ?></p>



<?php $this->endWidget(); ?>

