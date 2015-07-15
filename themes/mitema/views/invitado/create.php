<?php
/* @var $this InvitadoController */
/* @var $model Invitado */

$this->breadcrumbs=array(
	'Invitados'=>array('index'),
	'Nuevo Invitado',
);

$this->menu=array(
	array('label'=>'Lista Invitados', 'url'=>array('index')),
	array('label'=>'Administar Invitados', 'url'=>array('admin')),
);
?>
<p class="h1 text-center"><strong>Nuevo Invitado</strong></p>



<script type="text/javascript">
   function pulsar (){
       alert("Usuarios no invitados guardados.");
  var datosm = $('#personas-grid').keepSelectionData();
$.each(datosm, function( index, value ) {
  $.ajax({ url: "invitar" , type: 'post', data: { idActo:<?php echo $idActo;?>,persona: value} });

  });

   };

</script>

<?php

$personas=new Personas('search');
$personas->unsetAttributes();
if(isset($_GET['Personas']))
			$personas->attributes=$_GET['Personas'];
$this->renderPartial('/personas/_admin',array(
	'model'=>$personas,
));


$dummy = new EKeepSelection('#personas-grid');



?>
<p class="h1 text-center">

    <button  class="btn btn-info btn-lg" type="button" id="boton" onclick="pulsar()">Guardar</button></p>


