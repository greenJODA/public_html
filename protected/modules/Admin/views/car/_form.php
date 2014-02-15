<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'car-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Mark_c'); ?>
		<?php echo $form->textField($model,'Mark_c',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Mark_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Model_c'); ?>
		<?php echo $form->textField($model,'Model_c',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Model_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Year_c'); ?>
		<?php echo $form->textField($model,'Year_c'); ?>
		<?php echo $form->error($model,'Year_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nomer_c'); ?>
		<?php echo $form->textField($model,'Nomer_c',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Nomer_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type_c'); ?>
		<?php echo $form->textField($model,'Type_c',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Type_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Custom_c'); ?>
		<?php echo $form->textField($model,'Custom_c',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Custom_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text_c'); ?>
        <?php echo $form->textArea($model,'Text_c'); ?>
		<?php echo $form->error($model,'Text_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Articul_c'); ?>
		<?php echo $form->textField($model,'Articul_c'); ?>
		<?php echo $form->error($model,'Articul_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Price_c'); ?>
		<?php echo $form->textField($model,'Price_c'); ?>
		<?php echo $form->error($model,'Price_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image_c'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', 
        array( 
            'model'=>$model, 
            'attribute'=>'Image_c', 
            'language'=>'ru', 
            'editorTemplate'=>'full', )); 
        ?>
		<?php echo $form->error($model,'Image_c'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->