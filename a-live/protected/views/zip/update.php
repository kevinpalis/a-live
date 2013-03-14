<?php
$this->breadcrumbs=array(
	'Zips'=>array('index'),
	$model->idZipCode=>array('view','id'=>$model->idZipCode),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zip','url'=>array('index')),
	array('label'=>'Create Zip','url'=>array('create')),
	array('label'=>'View Zip','url'=>array('view','id'=>$model->idZipCode)),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>Update Zip <?php echo $model->idZipCode; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>