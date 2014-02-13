<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cod_c')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Cod_c), array('view', 'id'=>$data->Cod_c)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mark_c')); ?>:</b>
	<?php echo CHtml::encode($data->Mark_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Model_c')); ?>:</b>
	<?php echo CHtml::encode($data->Model_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Year_c')); ?>:</b>
	<?php echo CHtml::encode($data->Year_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nomer_c')); ?>:</b>
	<?php echo CHtml::encode($data->Nomer_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type_c')); ?>:</b>
	<?php echo CHtml::encode($data->Type_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Custom_c')); ?>:</b>
	<?php echo CHtml::encode($data->Custom_c); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Text_c')); ?>:</b>
	<?php echo CHtml::encode($data->Text_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Articul_c')); ?>:</b>
	<?php echo CHtml::encode($data->Articul_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Price_c')); ?>:</b>
	<?php echo CHtml::encode($data->Price_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image_c')); ?>:</b>
	<?php echo CHtml::encode($data->Image_c); ?>
	<br />

	*/ ?>

</div>