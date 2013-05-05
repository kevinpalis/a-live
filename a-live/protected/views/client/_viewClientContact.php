<?php $clientContacts = $model->clientcontactpeople(array('condition'=>$model->id));
		
		$i=1;	
		foreach($clientContacts as $clientContact)
			{ ?>
				
		<!--Client Contact information Details-->
		<div class="row-fluid">
			<div class="page-header">
			<h2><small>Client Contact Information[<?php echo $i;?>]</small></h2>
			</div>
		</div>
				
		<div class="row-fluid">
			<div class="span6">
				<label class="muted"><h6>Full Name:</h6></label>			
					<span class="HL"><?php echo $clientContact->fullName; ?></span>
			</div>
			<div class="span6">
				<label class="muted"><h6>Address:</h6></label>		
					<span class="HL"><?php echo $clientContact->address.", ".$clientContact->zip->fullZipDetails;?></span>
			</div>	
		</div>
		
		<div class="row-fluid">
			<div class="span4"><label class="muted"><h6>Primary Num:</h6></label><span class="HL"><?php echo $clientContact->primaryNum; ?></span></div>
			<div class="span4"><label class="muted"><h6>Secondary Num:</h6></label><span class="HL"><?php echo $clientContact->secondaryNum; ?></span></div>
			<div class="span4"><label class="muted"><h6>Email:</h6></label><span class="HL"><?php echo $clientContact->email; ?></span></div>
		</div>	

		<br/>
		<br/>
		<?php
			$i++;
			}
	?>	

	<br/>
	<hr/>