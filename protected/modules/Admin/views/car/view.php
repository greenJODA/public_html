<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	$model->Cod_c,
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Create Car', 'url'=>array('create')),
	array('label'=>'Update Car', 'url'=>array('update', 'id'=>$model->Cod_c)),
	array('label'=>'Delete Car', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_c),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>

<h1>View Car #<?php echo $model->Cod_c; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cod_c',
		'Mark_c',
		'Model_c',
		'Year_c',
		'Nomer_c',
		'Type_c',
		'Custom_c',
		'Text_c',
		'Articul_c',
		'Price_c',
		'Image_c',
	),
)); ?>
