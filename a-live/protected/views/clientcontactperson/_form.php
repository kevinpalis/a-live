<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'clientcontactperson-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::hiddenField('formName',
		'Clientcontactperson'
		); 
	?>

	<?php echo $form->hiddenField($model,'createdBy',
		array( 
		'value'=>Yii::app()->user->getId()
		)); 
	?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<div class="span3">	
			<?php 

				if(isset($_GET['clientId'])){
					echo $form->dropDownListRow($model,'clientId',CHtml::listData(CLient::model()->findAll('id='.$_GET['clientId']),'id', 'fullName'),
						array(
							'class'=>'span12',
													
						)
					); 
				}
				else
					{
					echo $form->dropDownListRow($model,'clientId',CHtml::listData(CLient::model()->findAll('id>0'),'id', 'fullName'),
					array(
							'empty'=>'Select Client',
							'class'=>'span12',
							
						)
					); 
				
			//use select2 for dropdowns
				$this->widget('ext.select2.ESelect2',array(
	  				'selector'=>'#Clientcontactperson_clientId',
	  				'options'=>array(
	  					'minimumInputLength'=> 3,
	  					'width'=>'100%'
	  					)
					));
				}
			?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6"><?php echo $form->textFieldRow($model,'fname',array('class'=>'span12','maxlength'=>20)); ?></div>
		<div class="span6"><?php echo $form->textFieldRow($model,'lname',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>
	
	<div class="row-fluid">
		<div class="span12"><?php echo $form->textFieldRow($model,'address',array('class'=>'span12','maxlength'=>40)); ?></div>
	</div>
	<div class="row-fluid">	
		<div class="span4">

			<label class="required" for="city_id">
			Zip
			<span class="required">*</span>
			</label>			
			<?php /*echo $form->dropDownListRow($model,'zipId',CHtml::listData(Zip::model()->findAll('id>0'),'zipCode', 'zipCode'),
			array(
					'empty'=>'Select Zip Code',
					'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('zip/findAllCities'),
					'update'=>'#city_id',

			)));*/
			
			
			echo CHtml::dropDownList('Clientcontactperson[zipCode]','',CHtml::listData(Zip::model()->findAll('id>0'),'zipCode', 'zipCode'),
			array(
					'empty'=>'Select Zip Code',
					'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('zip/findAllCities'),
					'update'=>'#Clientcontactperson_zipId',

			)));
			
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Clientcontactperson_zipCode',
			  	'options'=>array(
  					'minimumInputLength'=> 0,
  					'width'=>'75%'
  					)
				));
		
			?></div>
			<div class="span4">
			<label class="required" for="city_id">
			City
			<span class="required">*</span>
			</label>
			<?php
				echo $form->dropDownList($model, 'zipId',array(), 
						array(
						'empty'=>'Select City',
						'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('zip/findAllStates'),
						'update'=>'#state_id', 
						))
					);

			?>
		</div>
		<div class="span4">
			<label class="required" for="Zip_state">
			State
			<span class="required">*</span>
			</label>
			<?php
				echo CHtml::dropDownList('state_id','', array(),array('empty'=>'Select State'));
			?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span4">
			<label class="required" for="city_id">
			Primary Number
			<span class="required">*</span>
			</label>
			<?php echo $form->numberField($model,'primaryNum',array('class'=>'span12','maxlength'=>10)); ?>
		</div>
		<div class="span4">
			<label class="required" for="city_id">
			Alternate Number
			</label>
			<?php echo $form->numberField($model,'secondaryNum',array('class'=>'span12','maxlength'=>10)); ?>
		</div>
		<div class="span4">
			<label class="required" for="city_id">
			Email Address
			</label>
			<?php echo $form->emailField($model,'email',array('class'=>'span12','maxlength'=>50)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>

		<?php 
		if(isset($_GET['clientId'])){ 
		?>
		<div class="pull-right">
		<a id="Clear" class="btn" href="<?PHP echo "../clientintake/create?clientId=".$_GET['clientId'];?>" >Skip</a>
		
		<?php
		}
		?>
		</div>
	</div>

<?php $this->endWidget(); ?>
