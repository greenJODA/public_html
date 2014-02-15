<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список авто', 'url'=>array('index')),
	array('label'=>'Изменить', 'url'=>array('admin')),
);
?>

<h1>Create Car</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>