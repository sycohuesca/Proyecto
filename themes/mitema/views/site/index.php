<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array('Inicio');
?>

<p class="h1 text-center">
     <strong>Bienvenido a  <?php echo CHtml::encode(Yii::app()->name); ?></strong></p>
<img id ="presentacion" class="img-rounded" src="<?php echo Yii:: app() ->baseUrl.'/img/ume2.jpg' ?>" alt="Foto Ume">


