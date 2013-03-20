<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facilitycontact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'Facility_idFacility',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'primaryContact',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'secondaryContactNum',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'facilityContactType',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
