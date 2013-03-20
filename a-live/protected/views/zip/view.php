<?php
$this->breadcrumbs=array(
	'Zips'=>array('index'),
	$model->idZipCode,
);

$this->menu=array(
	array('label'=>'List Zip','url'=>array('index')),
	array('label'=>'Create Zip','url'=>array('create')),
	array('label'=>'Update Zip','url'=>array('update','id'=>$model->idZipCode)),
	array('label'=>'Delete Zip','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->idZipCode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>View Zip #<?php echo $model->idZipCode; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'idZipCode',
		'cityName',
		'countyName',
		'state',
	),
)); ?>
