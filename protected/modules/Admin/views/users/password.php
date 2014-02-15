<?php

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
);

?>
push your pass <br />
<?php
	echo CHtml::form();
    echo CHtml::textField('password');
    echo CHtml::submitButton('Change');
    echo CHtml::endForm();
?>