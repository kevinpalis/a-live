	
	<!--Client information Details-->
	<div class="row-fluid">
		<div class="span4">	
			<label class="muted"><h6>Status:</h6></label>			
				<span class="HL"><?php echo $model->clientStatus; ?></span>
		</div>
	
		
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Full Name:</h6></label>			
				<span class="HL"><?php echo $model->fullName; ?></span>
		</div>
		<div class="span6">
			<label class="muted"><h6>Address:</h6></label>		
				<span class="HL"><?php echo $model->address.", ".$model->zip->fullZipDetails;?></span>
		</div>	
	</div>
	
	<div class="row-fluid">
		<div class="span4"><label class="muted"><h6>Primary Num:</h6></label><span class="HL"><?php echo $model->primaryNum; ?></span></div>
		<div class="span4"><label class="muted"><h6>Secondary Num:</h6></label><span class="HL"><?php echo $model->secondaryNum; ?></span></div>
		<div class="span4"><label class="muted"><h6>Email:</h6></label><span class="HL"><?php echo $model->email; ?></span></div>
	</div>

	<div class="row-fluid">
	<div class="span3"><label class="muted"><h6>Sex:</h6></label><span class="HL"><?php echo $model->gender; ?></span></div>
	<div class="span3"><label class="muted"><h6>Height:</h6></label>
			<span class="HL">
				<?php $feet = floor($model->height/12); 
						echo $feet;
						
				?> ft 
				<?php  echo $model->height-($feet*12); ?> in
			</span>
	</div>
	<div class="span3"><label class="muted"><h6>Weight:</h6></label><span class="HL"><?php echo $model->weight; ?> lbs</span></div>
	<div class="span3"><label class="muted"><h6>Age:</h6></label><span class="HL"><?php echo $model->age; ?></span></div>
	</div>
	
	<div class="row-fluid">
	<div class="span4"><label class="muted"><h6>Date Start:</h6></label><span class="HL"><?php echo $model->dateStart; ?></span></div>
	<div class="span4"><label class="muted"><h6>Date End:</h6></label><span class="HL"><?php echo $model->dateEnd; ?></span></div>
	</div>
		