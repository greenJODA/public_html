<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	$model->Cod_c=>array('view','id'=>$model->Cod_c),
	'Update',
);

$this->menu=array(
	array('label'=>'Список авто', 'url'=>array('index')),
	array('label'=>'Создать авто', 'url'=>array('create')),
	array('label'=>'Показать авто', 'url'=>array('view', 'id'=>$model->Cod_c)),
	array('label'=>'Изменить', 'url'=>array('admin')),
);
?>

<h1>Update Car <?php echo $model->Cod_c; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>