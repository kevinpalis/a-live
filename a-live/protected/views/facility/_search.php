<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'idFacility',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'facilityName',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'addres',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'zip',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'facilityStatus',array('class'=>'span5','maxlength'=>20)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
