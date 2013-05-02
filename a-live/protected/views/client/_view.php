
	<?php 
	$Employee = Employee::model()->findByPk($model->createdBy); 
	$HCSAssigned = Employee::model()->findByPk($model->employeeId);
	$FacilityName = Facility::model()->findByPk($model->facilityId);
	$FacilityContact = Facilitycontact::model()->findByPk($model->facilityContactId);
	$ZipDetails = Zip::model()->findByPk($model->zipId);
	?>

	<div class="row-fluid">
		<div class="page-header">
		<h2><small>Client Referral Data</small></h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="muted">
			<h6>Created By:</h6>
			</label>	
			<?php echo $Employee->email; ?> 
		</div>
		<div class="span3">	
			<label class="muted">
			<h6>Created On:</h6>
			</label>
				<?php echo $model->dateEntered; ?>
		</div>
	</div>
	<div class="row-fluid">
	<div class="span3">	

		<label class="muted">
		<h6>Assigned To:</h6>
		</label>			
			
		<?php echo $HCSAssigned->fullName; ?>
	</div>
	<div class="span3">
	
		<label class="muted">
		<h6>Facility Name:</h6>
		</label>			
			
		<?php echo $FacilityName->facilityName; ?>

	</div>
	<div class="span3">
		<label class="muted">
		<h6>Facility Contact:</h6>
		</label>			
			
		<?php echo $FacilityContact->fullName; ?>

	</div>
	
	</div>

	<br/>
	<br/>
	<div class="row-fluid">
		<div class="page-header">
		<h2><small>Client Basic Information</small></h2>
		</div>
	</div>
	<!--Client information Details-->
	<div class="row-fluid">
		<div class="span4">	
			<label class="muted"><h6>Status:</h6></label>			
			<?php echo $model->clientStatus; ?>
		</div>
	
		
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Full Name:</h6></label>			
			<?php echo $model->fullName; ?>
		</div>
		<div class="span6">
			<label class="muted"><h6>Address:</h6></label>		
			<?php echo $model->address.", ".$ZipDetails->fullZipDetails;?>
		</div>	
	</div>
	
	<div class="row-fluid">
		<div class="span4"><label class="muted"><h6>Primary Num:</h6></label><?php echo $model->primaryNum; ?></div>
		<div class="span4"><label class="muted"><h6>Secondary Num:</h6></label><?php echo $model->secondaryNum; ?></div>
		<div class="span4"><label class="muted"><h6>Email:</h6></label><?php echo $model->email; ?></div>
	</div>

	<div class="row-fluid">
	<div class="span3"><label class="muted"><h6>Sex:</h6></label><?php echo $model->gender; ?></div>
	<div class="span3"><label class="muted"><h6>Height:</h6></label><?php echo $model->height; ?></div>
	<div class="span3"><label class="muted"><h6>Weight:</h6></label><?php echo $model->weight; ?></div>
	<div class="span3"><label class="muted"><h6>Age:</h6></label><?php echo $model->age; ?></div>
	</div>
	
	<div class="row-fluid">
	<div class="span4"><label class="muted"><h6>Date Start:</h6></label><?php echo $model->dateStart; ?></div>
	<div class="span4"><label class="muted"><h6>Date End:</h6></label><?php echo $model->dateEnd; ?></div>
	</div>
	

	<br/>
	<hr/>