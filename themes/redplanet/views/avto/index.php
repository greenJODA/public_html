<?php
/* @var $this AvtoController */

$this->breadcrumbs=array(
	'Avto',
);
?>


<p>
<?php 
$a = Car::Model()->findAllBySql('SELECT * FROM {{Car}}');

foreach ($a as $one){
echo CHtml::link('<h3>'.$one->Mark_c.'&nbsp'.$one->Model_c.'&nbsp'.$one->Type_c.'</h3>',array('view'));
echo substr($one->Image_c,0,260);
echo CHtml::button('купить', array('submit' => array('/')));
echo '<br /><br /><hr />';

}
//echo $a->Model_c;
 //'<a href='dfsd'>', , '</a>'
?>

</p>
