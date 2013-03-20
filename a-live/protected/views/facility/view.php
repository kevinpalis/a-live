<?php
$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	$model->idFacility,
);

$this->menu=array(
	array('label'=>'List Facility','url'=>array('index')),
	array('label'=>'Create Facility','url'=>array('create')),
	array('label'=>'Update Facility','url'=>array('update','id'=>$model->idFacility)),
	array('label'=>'Delete Facility','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idFacility),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facility','url'=>array('admin')),
);
?>

<h1>View Facility #<?php echo $model->idFacility; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idFacility',
		'facilityName',
		'addres',
		'zip',
		'facilityStatus',
	),
)); ?>
