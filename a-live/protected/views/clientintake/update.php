<?php
$this->breadcrumbs=array(
	'Clientintakes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientintake','url'=>array('index')),
	array('label'=>'Create Clientintake','url'=>array('create')),
	array('label'=>'View Clientintake','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Clientintake','url'=>array('admin')),
);
?>

<h1>Update Clientintake <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>