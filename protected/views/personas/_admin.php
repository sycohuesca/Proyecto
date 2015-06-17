
</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

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
