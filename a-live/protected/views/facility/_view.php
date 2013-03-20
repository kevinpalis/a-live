<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFacility')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFacility),array('view','id'=>$data->idFacility)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityName')); ?>:</b>
	<?php echo CHtml::encode($data->facilityName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addres')); ?>:</b>
	<?php echo CHtml::encode($data->addres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityStatus')); ?>:</b>
	<?php echo CHtml::encode($data->facilityStatus); ?>
	<br />


</div>