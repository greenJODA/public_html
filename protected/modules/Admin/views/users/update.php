<?php

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->User_id)),
    array('label'=>'Change password', 'url'=>array('password', 'id'=>$model->User_id)),
);
?>

<h1>Update Users <?php echo $model->User_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>