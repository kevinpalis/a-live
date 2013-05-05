<?php
$this->breadcrumbs=array(
	'Clientcontactpeople'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clientcontactperson','url'=>array('index')),
	array('label'=>'Manage Clientcontactperson','url'=>array('admin')),
);
?>

<h1>Create Client Contact Person</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>