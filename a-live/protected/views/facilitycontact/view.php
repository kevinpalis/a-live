<?php
$this->breadcrumbs=array(
	'Facilitycontacts'=>array('index'),
	$model->idFacilityContact,
);

$this->menu=array(
	array('label'=>'List Facilitycontact','url'=>array('index')),
	array('label'=>'Create Facilitycontact','url'=>array('create')),
	array('label'=>'Update Facilitycontact','url'=>array('update','id'=>$model->idFacilityContact)),
	array('label'=>'Delete Facilitycontact','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idFacilityContact),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facilitycontact','url'=>array('admin')),
);
?>

<h1>View Facilitycontact #<?php echo $model->idFacilityContact; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idFacilityContact',
		'Facility_idFacility',
		'fname',
		'lname',
		'primaryContact',
		'secondaryContactNum',
		'facilityContactType',
	),
)); ?>
