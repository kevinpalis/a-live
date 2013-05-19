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
