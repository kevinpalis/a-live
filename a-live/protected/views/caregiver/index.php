<?php
$this->breadcrumbs=array(
	'Caregivers',
);

$this->menu=array(
	array('label'=>'Create Caregiver','url'=>array('create')),
	array('label'=>'Manage Caregiver','url'=>array('admin')),
);
?>

<h1>Caregivers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<h1>Clientintakes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$ciDataProvider,
	'itemView'=>'_ciView',
)); ?>

<?php 
	/*Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('caregiver-grid', {
			data: $(this).serialize()
		});
		return false;
	});
	");*/
	
	Yii::app()->clientScript->registerScript('search-cc', "
	var selectedCI = '0';
	$('.search-cc').click(function(){
		$('.search-form-ci').toggle();
		return false;
	});
	$('.search-form-ci form').submit(function(){
		$.fn.yiiGridView.update('caregiver-grid', {
			data: $(this).serialize()
		});
		return false;
	});
	");
?>

<?php Yii::app()->clientScript->registerScript('set-ci', "
		$('.setci').click(function(){
			selectedCI = $(('.idcontnr'+($('.setci')).text())).text();
			window.alert($('.setci').text());
			return false;
		});
		");
?>

<br />
<?php echo CHtml::link('Caregiver-ClientIntake Search111','#',array('class'=>'search-cc btn')); ?>
<br />	
<div class="search-form-ci" style="display:none">
<?php $this->renderPartial('_ciSearch',array(
	'model'=>$model,
)); ?>
</div>
<br /><br /><br />
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'caregiver-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fname',
		'lname',
		'photo',
		'address',
		'zipId',
		/*
		'sex',
		'birthDate',
		'driving',
		'pcExpList',
		'equipmentExpList',
		'applicationDate',
		'signedDocs',
		'englishLevel',
		'languagesSpoken',
		'rating',
		'height',
		'weight',
		'livingCondition',
		'primaryContactNum',
		'secondaryContactNum',
		'email',
		'paymentType',
		'withCar',
		'preferredDays',
		'preferredTimeStart',
		'preferredTimeEnd',
		'totalMonthsExperience',
		'educationalAttainment',
		'driversLicense',
		'driversLicenseType',
		'driversLicensePlaceofIssue',
		'driversLicenseExpirationDate',
		'accidentsPastYears',
		'accidentDetails',
		'movingViolations',
		'movingViolationsCount',
		'fingerPrint',
		'fingerPrintResults',
		'tbTested',
		'tbTestResults',
		'convictedCrime',
		'convictedCrimeDetails',
		'characterTraits',
		'references',
		'notes',
		'certifciations',
		'followUpCall',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
	)); 
?>
