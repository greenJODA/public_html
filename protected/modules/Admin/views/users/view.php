<?php
/* @var $this UsersController */
/* @var $model Users */


$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->User_id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->User_id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Users #<?php echo $model->User_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'User_id',
		'UserName',
		'password',
		'Created',
		'Role',
		'Email',
	),
)); ?>
