
<h2>Evento en <?php   echo $model_actos->asunto;?></h2>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personas-grid',
    'selectableRows'=>2,
	'dataProvider'=>$model_personas->search(),
	'filter'=>$model_personas,
	'columns'=>array(
       'id_personas',
	     'empleo',
		'nombre',
		'apellidos',
		'cargos')));




?>
