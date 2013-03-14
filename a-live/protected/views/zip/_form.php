<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'zip-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'idZipCode',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'cityName',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'countyName',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>40)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
