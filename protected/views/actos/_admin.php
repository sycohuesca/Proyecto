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
		'presidido_por',
		/*
		'observaciones',
		'presidido_por',
        'uniformidad',
		'material_necesario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
