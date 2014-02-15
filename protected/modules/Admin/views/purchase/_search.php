<?php
/* @var $this PurchaseController */
/* @var $model Purchase */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cod_p'); ?>
		<?php echo $form->textField($model,'Cod_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_number'); ?>
		<?php echo $form->textField($model,'p_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cod_c'); ?>
		<?php echo $form->textField($model,'Cod_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_id'); ?>
		<?php echo $form->textField($model,'User_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Guest'); ?>
		<?php echo $form->textField($model,'Guest',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->