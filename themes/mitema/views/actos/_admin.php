<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'actos-grid',
    'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'asunto',

		'lugar',
		 array(
         'name'=>'fecha',
            'value'=> $model->fecha,
        ),
		'hora',
		'presidido_por',
		/*
		'observaciones',
		'presidido_por',
        'uniformidad',
		'material_necesario',
		*/
		array(
		'header'=>'Opciones',
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
