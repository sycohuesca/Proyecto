<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'asunto',
        'presidido_por',
		'lugar',
		 array(
         'name'=>'fecha',
            'value'=> $model->fecha,
        ),
		'hora',
		'uniformidad',
		/*
		'observaciones',
		'presidido_por',
		'material_necesario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
