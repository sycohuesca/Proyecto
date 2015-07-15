



<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'personas-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
    'selectableRows'=>2,
	'filter'=>$model,
	'columns'=>array(
        'organismo',
		'empleo',
		'nombre',
		'apellidos',
		'dni',
        array(
            'name'=>'unidad',
            'value'=>'$data->idUnidad->nombre_u',
        ),
        'comunidad',

        'localidad',
		/*
		'cargos',
		'email',
		'direccion',
		'localidad',
		'provincia',
		'cp',
		'comunidad',
		'movil',
		'cooporativo',
		'toma_posesion',
		'fecha_de_cese',
		'observaciones',
		'id_unidad',
		*/
		array(
		'header'=>'Opciones',
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
