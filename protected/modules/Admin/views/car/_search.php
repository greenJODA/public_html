<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_c'); ?>
		<?php echo $form->textField($model,'Cod_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mark_c'); ?>
		<?php echo $form->textField($model,'Mark_c',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Model_c'); ?>
		<?php echo $form->textField($model,'Model_c',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Year_c'); ?>
		<?php echo $form->textField($model,'Year_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nomer_c'); ?>
		<?php echo $form->textField($model,'Nomer_c',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Type_c'); ?>
		<?php echo $form->textField($model,'Type_c',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Custom_c'); ?>
		<?php echo $form->textField($model,'Custom_c',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text_c'); ?>
		<?php echo $form->textArea($model,'Text_c',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Articul_c'); ?>
		<?php echo $form->textField($model,'Articul_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Price_c'); ?>
		<?php echo $form->textField($model,'Price_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Image_c'); ?>
		<?php echo $form->textField($model,'Image_c'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->