<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<?php 
		/* ID: 1	
		Client: 1	
		Cg Sex: 1	
		Live In: 1	
		Service Hours: 24	
		Created By: Kevin Palis	
		Service Days: M,T,W,Th,F	
		Cg Age From: 18	
		Cg Age To: 50	
		Cg Weight From: 120	
		Cg Weight To: 180	
		Cg Height From: 120	
		Cg Height To: 180	
		Cg Driving: 0	
		Clients Car: 0	
		Cg English Level: 4	
		Pc Pets: 0	
		Pc Smoking: 0	
		Pc Living Condition: 1	
		Pc Weight Transfer: 100	
		Pc Condition List: 1,2,3,4,5	
		Equipment List: 1,2,3	
		Notes: Test	*/
		$livingcond = "live-in";
		if($GLOBALS['selectedClientintake']->liveIn==='0') $livingcond = "live-out";
		$shours = $GLOBALS['selectedClientintake']->serviceHours;
		$csex = $GLOBALS['selectedClientintake']->cgSex;
		//$sdays = explode(",", $GLOBALS['selectedClientintake']->serviceDays);
		$sdays = $GLOBALS['selectedClientintake']->serviceDays;
		$cdriving = $GLOBALS['selectedClientintake']->cgDriving;
		$pccondlist = $GLOBALS['selectedClientintake']->pcConditionList;
		$eqlist = $GLOBALS['selectedClientintake']->equipmentList;
		$englevel = $GLOBALS['selectedClientintake']->cgEnglishLevel;
		$wrange = "<".($GLOBALS['selectedClientintake']->cgWeightTo);
		$hrange = "<".($GLOBALS['selectedClientintake']->cgHeightTo);
		$wcar = $GLOBALS['selectedClientintake']->clientsCar;

	?>
	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'photo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'zipId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5','maxlength'=>1, 'value'=>$csex)); ?>

	<?php echo $form->textFieldRow($model,'birthDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'driving',array('class'=>'span5','maxlength'=>1, 'value'=>$cdriving)); ?>

	<?php echo $form->textFieldRow($model,'pcExpList',array('class'=>'span5','maxlength'=>20, 'value'=>$pccondlist)); ?>

	<?php echo $form->textFieldRow($model,'equipmentExpList',array('class'=>'span5','maxlength'=>20, 'value'=>$eqlist)); ?>

	<?php echo $form->textFieldRow($model,'applicationDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'signedDocs',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'englishLevel',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'languagesSpoken',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'rating',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5', 'value'=>$hrange)); ?>

	<?php echo $form->textFieldRow($model,'weight',array('class'=>'span5', 'value'=>$wrange)); ?>

	<?php echo $form->textFieldRow($model,'livingCondition',array('class'=>'span5','maxlength'=>10, 'value'=>$livingcond)); ?>

	<?php echo $form->textFieldRow($model,'primaryContactNum',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'secondaryContactNum',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'paymentType',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'withCar',array('class'=>'span5','maxlength'=>1, 'value'=>$wcar)); ?>

	<?php echo $form->textFieldRow($model,'preferredDays',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'preferredTimeStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'preferredTimeEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'totalMonthsExperience',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'educationalAttainment',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'driversLicense',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'driversLicenseType',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'driversLicensePlaceofIssue',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'driversLicenseExpirationDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'accidentsPastYears',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'accidentDetails',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'movingViolations',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'movingViolationsCount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fingerPrint',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'fingerPrintResults',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'tbTested',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'tbTestResults',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'convictedCrime',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'convictedCrimeDetails',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'characterTraits',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'references',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'certifciations',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'followUpCall',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
