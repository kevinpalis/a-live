<?php
$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	$model->idFacility=>array('view','id'=>$model->idFacility),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facility','url'=>array('index')),
	array('label'=>'Create Facility','url'=>array('create')),
	array('label'=>'View Facility','url'=>array('view','id'=>$model->idFacility)),
	array('label'=>'Manage Facility','url'=>array('admin')),
);
?>

<h1>Update Facility <?php echo $model->idFacility; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>