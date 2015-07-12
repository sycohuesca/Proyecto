



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personas-grid',
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
            'name'=>'Unidad',
            'value'=>'$data->idUnidad->nombre',
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
			'class'=>'CButtonColumn',
		),
	),
)); ?>
