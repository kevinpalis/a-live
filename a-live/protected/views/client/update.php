<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->idClient=>array('view','id'=>$model->idClient),
	'Update',
);

$this->menu=array(
	array('label'=>'List Client','url'=>array('index')),
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'View Client','url'=>array('view','id'=>$model->idClient)),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>Update Client <?php echo $model->idClient; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>