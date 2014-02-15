<?php
/* @var $this PurchaseController */
/* @var $model Purchase */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->Cod_p,
);

$this->menu=array(
	array('label'=>'List Purchase', 'url'=>array('index')),
	array('label'=>'Create Purchase', 'url'=>array('create')),
	array('label'=>'Update Purchase', 'url'=>array('update', 'id'=>$model->Cod_p)),
	array('label'=>'Delete Purchase', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cod_p),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Purchase', 'url'=>array('admin')),
);
?>

<h1>View Purchase #<?php echo $model->Cod_p; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cod_p',
		'p_number',
		'Cod_c',
		'User_id',
		'Guest',
		'Status',
	),
)); ?>
