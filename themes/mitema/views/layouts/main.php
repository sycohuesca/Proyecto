<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/micss.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->



<?php echo Yii::app()->bootstrap->register(); ?>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/ume.ico">
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Menú',
    'brandUrl'=>Yii::app()->request->baseUrl,
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
               array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'Personas', 'url'=>array('/personas/index')),

                array('label'=>'Unidades', 'url'=>array('/unidad/index')),
                 array('label'=>'Actos', 'url'=>array('/actos/index')),
                array('label'=>'Usuarios', 'url'=>array('/usuarios/index')),
				array('label'=>'Contacto', 'url'=>array('/site/contact')),
                 array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                )),
            ),
        ));


 ?>
<div class="container">

	<div class="header">


	</div><!-- header -->

    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
)); ?><!-- breadcrumbs -->
	<?php endif?><!-- breadcrumbs -->







	<?php echo $content; ?>

	</div>

    <footer class="footer">
        <p class="text-center">
    Copyright &copy; <?php echo date('Y'); ?> by Carmelo.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
        <strong>Versión 2.01</strong>
        </p>
    </footer>


<!-- page -->

</body>
</html>
