<?php
/* @var $this PurchaseController */
/* @var $model Purchase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchase-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_number'); ?>
		<?php echo $form->textField($model,'p_number'); ?>
		<?php echo $form->error($model,'p_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cod_c'); ?>
		<?php echo $form->textField($model,'Cod_c'); ?>
		<?php echo $form->error($model,'Cod_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_id'); ?>
		<?php echo $form->textField($model,'User_id'); ?>
		<?php echo $form->error($model,'User_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Guest'); ?>
		<?php echo $form->textField($model,'Guest',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Guest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->