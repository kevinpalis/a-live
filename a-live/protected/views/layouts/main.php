<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" style="height:100%">
<head>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" media="screen, projection" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />-->

	<!-- blueprint CSS framework -->
	<!--
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!--
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="height:100%">
<div id="wrap" style="height: auto !important;margin: 0 auto -60px;min-height: 100%;">

		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				
				array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>!Yii::app()->user->isGuest),
				//temp while there is no page handling this
				array('label'=>'Employee', 'url'=>array('/employee'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Zip', 'url'=>array('/zip'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Facility', 'url'=>array('/facility'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'FacilityContact', 'url'=>array('/facilitycontact'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Client', 'url'=>array('/client'), 'visible'=>!Yii::app()->user->isGuest),

				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

		        
		        //array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
					),
		));*/ ?>


		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'brand' => 'A-live',
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label'=>'Dashboard', 'url'=>array('/site/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Admin', 'url'=>array('/employee'), 'visible'=>!Yii::app()->user->isGuest,
										'items'=>array(
												//Employee
												array('label'=>'Employee'),
												array('label'=>'Employee Create', 'url'=>array('/employee/create', 'tag'=>'new')),
												array('label'=>'Employee Search', 'url'=>array('/employee/admin', 'tag'=>'popular')),
												//Zip Code
												array('label'=>'Zip'),
												array('label'=>'Zip Code Create', 'url'=>array('/zip/create', 'tag'=>'new')),
												array('label'=>'Zip Code Search', 'url'=>array('/zip/admin', 'tag'=>'popular')),
										)	
									),

							array('label'=>'Client', 'url'=>array('/facility'),'visible'=>!Yii::app()->user->isGuest,
								'items'=>array(

												//Client
												array('label'=>'Client'),
												array('label'=>'Client Create', 'url'=>array('/client/create', 'tag'=>'new')),
												array('label'=>'Client Search', 'url'=>array('/client/admin', 'tag'=>'popular')),
												
												array('label'=>'Client Contacts'),
												array('label'=>'Client Contact Create', 'url'=>array('/clientcontactperson/create', 'tag'=>'new')),

												array('label'=>'Client Intake'),
												array('label'=>'Client Intake Create', 'url'=>array('/clientintake/create', 'tag'=>'new')),
												
								)
							),

							array('label'=>'Facility', 'url'=>array('/facility'),'visible'=>!Yii::app()->user->isGuest,
								'items'=>array(


												//Facility
												array('label'=>'Facility'),
												array('label'=>'Facility Create', 'url'=>array('/facility/create', 'tag'=>'new')),
												array('label'=>'Facility Search', 'url'=>array('/facility/admin', 'tag'=>'popular')),
												//Facility Contact
												array('label'=>'Facility Contact'),
												array('label'=>'Facility Contact Create', 'url'=>array('/facilitycontact/create', 'tag'=>'new')),
												array('label'=>'Facility Contact Search', 'url'=>array('/facilitycontact/admin', 'tag'=>'popular')),
												
										)	


							),

							array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)

							
			)
		)
	)
));
?>



	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
<div id="push" style="height:60px">
	<div id="footer" style="height:60px"></div>
		<div class="muted credit">
			Copyright &copy; <?php echo date('Y'); ?> by A-Live.<br/>
			All Rights Reserved.<br/>
			<!--?php echo Yii::powered(); ?-->
		</div>
	</div><!-- footer -->
</div>
</div>

</body>
</html>
