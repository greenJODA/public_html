<?php
/* @var $this PurchaseController */
/* @var $model Purchase */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->Cod_p=>array('view','id'=>$model->Cod_p),
	'Update',
);

$this->menu=array(
	array('label'=>'List Purchase', 'url'=>array('index')),
	array('label'=>'Create Purchase', 'url'=>array('create')),
	array('label'=>'View Purchase', 'url'=>array('view', 'id'=>$model->Cod_p)),
	array('label'=>'Manage Purchase', 'url'=>array('admin')),
);
?>

<h1>Update Purchase <?php echo $model->Cod_p; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>