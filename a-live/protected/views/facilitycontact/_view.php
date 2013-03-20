<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFacilityContact')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFacilityContact),array('view','id'=>$data->idFacilityContact)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Facility_idFacility')); ?>:</b>
	<?php echo CHtml::encode($data->Facility_idFacility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primaryContact')); ?>:</b>
	<?php echo CHtml::encode($data->primaryContact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondaryContactNum')); ?>:</b>
	<?php echo CHtml::encode($data->secondaryContactNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityContactType')); ?>:</b>
	<?php echo CHtml::encode($data->facilityContactType); ?>
	<br />


</div>