<?php
/* @var $this AvtoController */

$this->breadcrumbs=array(
	'Avto',
);
?>
<?php

 foreach ($models as $one){
	echo '<h3>',$one->Model_c,'</h3>';
 }


?>