<?php
if(isset($_POST['fecha'])){
    echo $_POST['fecha'];
}

if (isset($_POST['nombre'])){
    echo $_POST['nombre'];
}
if (isset($_POST['check'])){
    echo $_POST['check'];
}

$form=$this->beginWidget('CActiveForm', array('id'=>'invitado-form', 'enableAjaxValidation'=>false));
?>
<h2>Seleciona una fecha </h2>
<input type='text' name='fecha'>

<select name='nombre'>

    <option value="1">uno</option>
    <option value="2">dos</option>
    <option value="3">tres</option>
    <option value="4">cuatro</option>

</select>

<input type="checkbox" name='check' value="1">uno
<input type="checkbox" name='check' value="2">dos
<input type="checkbox" name='check' value="3">tres
<input type="checkbox" name='check' value="4">cuatro

 <?php



echo CHtml::submitButton('enviar');

 ?>
<?php $this->endWidget(); ?>
