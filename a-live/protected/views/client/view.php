<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->idClient,
);

$this->menu=array(
	array('label'=>'List Client','url'=>array('index')),
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'Update Client','url'=>array('update','id'=>$model->idClient)),
	array('label'=>'Delete Client','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idClient),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>View Client #<?php echo $model->idClient; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idClient',
		'fname',
		'lname',
		'address',
		'zip',
		'age',
		'primaryNum',
		'secondaryNum',
		'email',
		'createdBy',
		'dateStart',
		'dateEnd',
		'status',
		'holidayWork',
		'sex',
		'height',
		'weight',
		'idEmployee',
		'idFacility',
		'idFacilityContact',
		'tagforUpdate',
		'depositAmount',
		'dateEntered',
		'creditLimit',
	),
)); ?>
