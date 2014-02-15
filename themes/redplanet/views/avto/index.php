<?php
/* @var $this AvtoController */

$this->breadcrumbs=array(
	'Avto',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
<?php 
$a = Car::Model()->findBySql('SELECT * FROM {{Car}}');

echo $a->Model_c;
echo '<br />';
//foreach ($a as $one){
//echo $one->Model_c;
//echo '<hr />';
//echo $a->Model_c;
//echo $a->Mark_c;
//echo $a->Mark_c;
//}
echo $a->Model_c;
 
?>

</p>
