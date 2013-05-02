<br>
<br>
<br>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="row-fluid">
	<div class="span1" style="margin:0 auto; float:none;">
		
	</div>
</div>
<!--p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p-->

	
<div class="row-fluid">
	<div class="span8">
		<div class="span3">
		<a href=""><img src="..." class="img-polaroid" width="140px" height="140px" style="width:140px;height:140px" alt="Create Client"></a>
		</div>
		<div class="span3">
		<a href=""><img src="..." class="img-polaroid" width="140px" height="140px" style="width:140px;height:140px" alt="Search Client"></a>
		</div>
		<div class="span3">
		<a href=""><img src="..." class="img-polaroid" width="140px" height="140px" style="width:140px;height:140px" alt="Check me in!"></a>
		</div>
		<div class="span3">
		<a href=""><img src="..." class="img-polaroid" width="140px" height="140px" style="width:140px;height:140px" alt="Another Option"></a>
		</div>
	</div>
	<div class="span4 well">
		<div><strong>Current Census:</strong></div>
		<div><strong>On-going Client Count:</strong></div>
		<div><strong>Termination Count:</strong></div>
		<div><strong>Total Referral Count - April:</strong></div>
		<div><strong>Total Admission Count - April:<strong></div>
	</div>
</div>
<hr/>
<div class="row-fluid">

	<div class="span6">
		<?php 
       		$this->Widget('ext.highcharts.HighchartsWidget', array(
   			
   			'options'=>array(
   			/*
   			'chart'=>array(
   				'type'=>'bar'
   				),
   			*/
      		'title' => array('text' => 'April-2013 ADM SMRY'),
      		'xAxis' => array(
         	'categories' => array("Week1","Week2","Week3","Week4")
      		),
      
      		'yAxis' => array(
         	'title' => array('text' => 'Client Count')
      		),
      		
      		/*
      		'plotOptions'=>array(
                'series'=> array(
                    'stacking'=> 'normal'
                )
            ),
      		*/
      		'series' => array(
         	array('type'=>'column', 'name' => 'Michael', 'data' => array(5,7,4)),
         	array('type'=>'column', 'name' => 'Bryan', 'data' => array(1, 2, 0)),
         	array('type'=>'column', 'name' => 'Ian', 'data' => array(1, 3, 1)),
         	array('type'=>'line', 'name' => 'Michael', 'data' => array(3,2,1)),
         	array('type'=>'line', 'name' => 'Bryan', 'data' => array(1, 0, 0)),
         	array('type'=>'line', 'name' => 'Ian', 'data' => array(0, 1, 0)),
         	array('type'=>'spline', 'name' => 'Total Admissions', 'data' => array(4, 3, 1))

      		),

      		'credits' => array('enabled' => false),
   )
));
    ?>
			
	</div>
	<div class="span6" style="padding-top:45px;">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Week 1</th>
					<th>Week 2</th>
					<th>Week 3</th>
					<th>Week 4</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>cell is row 0, column 0</td>
					<td>cell is row 0, column 1</td>
					<td>cell is row 0, column 2</td>
					<td>cell is row 0, column 3</td>
				</tr>
				<tr>
					<td>cell is row 1, column 0</td>
					<td>cell is row 1, column 1</td>
					<td>cell is row 1, column 2</td>
					<td>cell is row 1, column 3</td>
				</tr>
				<tr>
					<td>cell is row 2, column 0</td>
					<td>cell is row 2, column 1</td>
					<td>cell is row 2, column 2</td>
					<td>cell is row 2, column 3</td>
				</tr>
				<tr>
					<td>cell is row 3, column 0</td>
					<td>cell is row 3, column 1</td>
					<td>cell is row 3, column 2</td>
					<td>cell is row 3, column 3</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<hr/>
<div class="row-fluid">

	<div class="span12">
		<?php 
       		$this->Widget('ext.highcharts.HighchartsWidget', array(
   			
   			'options'=>array(
   			
   			'chart'=>array(
   				'type'=>'area'
   				),
   			
      		'title' => array('text' => 'Area Visits	 VS Referrals'),
      		'xAxis' => array(
         	'categories' => array("Facility1","Facility2","Facility3","Facility4")
      		),
      
      		'yAxis' => array(
         	'title' => array('text' => 'Client Count')
      		),
      		
      		/*
      		'plotOptions'=>array(
                'series'=> array(
                    'stacking'=> 'normal'
                )
            ),
      		*/
      		'series' => array(
         	array('name' => 'Visits', 'data' => array(5,0,4,5)),
         	array('name' => 'Referrals', 'data' => array(1,0,0,2))
         	),

      		'credits' => array('enabled' => false),
   )
));
    ?>
			
	</div>
</div>			

