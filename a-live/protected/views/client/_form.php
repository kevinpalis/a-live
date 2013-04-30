<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<!--
	Client Create form header 
	Createdy By
	Assigned to Facility
	Assigned to Sales Person
	-->
	
	<?php echo $form->hiddenField($model,'createdBy',
		array( 
		'value'=>Yii::app()->user->getId()
		)); 
	?>
	
	<?php echo CHtml::hiddenField('formName',
		'Client'
		); 
	?>

	<?php echo $form->hiddenField($model,'holidayWork',
		array( 
		'value'=>"1"
		)); 
	?>

	<?php echo $form->hiddenField($model,'dateEntered',
		array( 
		'value'=> date("Y-m-d H:i:s")
		)); 
	?>

	<div class="row-fluid">
		<div class="page-header">
		<h1><small>Client Referral Data</small></hq>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">	
			<label for="Client_CreatedByEmail">Created By</label>
				<input id="Client_createdByEmail" class="span12" type="text" name="Client_CreatedByEmail" value=<?php echo Yii::app()->user->name; ?> maxlength="10" readonly="readonly">
		</div>
		<div class="span3">	
			<label for="Client_DateCreation">Created On</label>
				<input id="Client_DateCreation" class="span12" type="text" name="ClientDateCreation" value=<?php echo date("Y-m-d H:i:s"); ?> maxlength="10" readonly="readonly">
		</div>
	</div>
	<div class="row-fluid">
	<div class="span3">	
		<?php echo $form->dropDownListRow($model,'employeeId',CHtml::listData(Employee::model()->findAll('id>0'),'id', 'fullName'),
			array(
					'empty'=>'Select HCS',
					'class'=>'span12',
					'options' => array(Yii::app()->user->getId()=>array('selected'=>true))
				)
		); ?>
	</div>
	<div class="span3">
	<?php echo $form->dropDownListRow($model,'facilityId',CHtml::listData(Facility::model()->findAll('id>0'),'id', 'facilityName'),
			array(
					'empty'=>'Select Facility',
					'class'=>'span12',
					'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('facilitycontact/getFacilityContacts'),
					'update'=>'#Client_facilityContactId',

			))); 
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Client_facilityId',
  				'options'=>array(
  					'minimumInputLength'=> 1,
  					'width'=>'100%'
  					)
				));
	?>		


	</div>
	<div class="span3">
	<?php
		echo $form->dropDownListRow($model,'facilityContactId',array(),array('empty'=>'Select Contact', 'class'=>'span12'));
	
		$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Client_facilityContactId',
  				'options'=>array(
  					'width'=>'100%'
  					)
				));

	 ?>
	</div>
	
	</div>

	<div class="row-fluid">
		<div class="page-header">
		<h1><small>Client Basic Information</small></hq>
		</div>
	</div>
	<!--Client information Details-->
	<div class="row-fluid">
		<div class="span4">	
			<?php echo $form->dropDownListRow($model, 'status', 
				array(1 => 'New Referral', 2=>'For follow-up', 3=>'For Interview', 4=> 'Closed Case',
						5 => 'Admission', 6=>'On-hold', 7=>'Termination'), 
					array('options' => array('1'=>array('selected'=>true)))); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6"><?php echo $form->textFieldRow($model,'fname',array('class'=>'span12','maxlength'=>20)); ?></div>
		<div class="span6"><?php echo $form->textFieldRow($model,'lname',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>
	
	<div class="row-fluid">
		<div class="span12"><?php echo $form->textFieldRow($model,'address',array('class'=>'span12','maxlength'=>40)); ?></div>
	</div>
	<div class="row-fluid">	
		<div class="span4">

			<label class="required" for="city_id">
			Zip
			<span class="required">*</span>
			</label>			
			<?php /*echo $form->dropDownListRow($model,'zipId',CHtml::listData(Zip::model()->findAll('id>0'),'zipCode', 'zipCode'),
			array(
					'empty'=>'Select Zip Code',
					'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('zip/findAllCities'),
					'update'=>'#city_id',

			)));*/
			
			
			echo CHtml::dropDownList('Client[zipCode]','',CHtml::listData(Zip::model()->findAll('id>0'),'zipCode', 'zipCode'),
			array(
					'empty'=>'Select Zip Code',
					'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('zip/findAllCities'),
					'update'=>'#Client_zipId',

			)));
			
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Client_zipCode',
			  	'options'=>array(
  					'minimumInputLength'=> 0,
  					'width'=>'100%'
  					)
				));
		
			?></div>
			<div class="span4">
			<label class="required" for="city_id">
			City
			<span class="required">*</span>
			</label>
			<?php
				echo $form->dropDownList($model, 'zipId',array(), 
						array(
						'empty'=>'Select City',
						'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('zip/findAllStates'),
						'update'=>'#state_id', 
						))
					);

			?>
		</div>
		<div class="span4">
			<label class="required" for="Zip_state">
			State
			<span class="required">*</span>
			</label>
			<?php
				echo CHtml::dropDownList('state_id','', array(),array('empty'=>'Select State'));
			?>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span4"><?php echo $form->textFieldRow($model,'primaryNum',array('class'=>'span12','maxlength'=>10)); ?></div>
		<div class="span4"><?php echo $form->textFieldRow($model,'secondaryNum',array('class'=>'span12','maxlength'=>10)); ?></div>
		<div class="span4"><?php echo $form->textFieldRow($model,'email',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>

	<div class="row-fluid">
	<div class="span3"><?php echo $form->dropDownListRow($model,'sex',array("0"=>"Male", "1"=>"Female"),array('class'=>'span5')); ?></div>
	<div class="span3"><?php echo $form->textFieldRow($model,'height',array('class'=>'span5','maxlength'=>10)); ?></div>
	<div class="span3"><?php echo $form->textFieldRow($model,'weight',array('class'=>'span5','maxlength'=>10)); ?></div>
	<div class="span3"><?php echo $form->textFieldRow($model,'age',array('class'=>'span5')); ?></div>
	</div>
	
	<div class="row-fluid">
	<div class="span4"><?php echo $form->datepickerRow($model, 'dateStart', array('class'=>'span8', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?></div>
	<div class="span4"><?php echo $form->datepickerRow($model, 'dateEnd', array('class'=>'span8', 'hint'=>'Click inside to input date value','prepend'=>'<i class="icon-calendar"></i>')); ?></div>
	</div>
	
	<!--
	<?php// echo $form->textFieldRow($model,'holidayWork',array('class'=>'span5','maxlength'=>1)); ?>

	<?php// echo $form->textFieldRow($model,'depositAmount',array('class'=>'span5')); ?>

	<?php// echo $form->textFieldRow($model,'dateEntered',array('class'=>'span5')); ?>

	<?php// echo $form->textFieldRow($model,'creditLimit',array('class'=>'span5')); ?>
	-->	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
