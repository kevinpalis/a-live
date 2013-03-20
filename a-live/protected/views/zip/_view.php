<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idZipCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idZipCode),array('view','id'=>$data->idZipCode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cityName')); ?>:</b>
	<?php echo CHtml::encode($data->cityName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('countyName')); ?>:</b>
	<?php echo CHtml::encode($data->countyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />


</div>