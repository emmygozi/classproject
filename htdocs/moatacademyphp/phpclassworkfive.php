
<head>
<title> Form Group</title>
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">



</head>

<body>

<div class="container-fluid">
<!-- classwork one -->
<div class="col-md-12">
<?php

$countryArray = array('Japan' => 'Tokyo', 'Mexico' => 'Mexico city', 'USA' => 'New York City', 'India' => 'Mumbai', 'Korea' => 'Seoul', 'China' => 'Shangai', 'Nigeria' => 'Lagos', 'Argentina' => 'Buenos Aires', 'Eygpt' => 'Cairo', 'England' => 'London' );

echo "PLease choose a city";
?>
<p>
<select>
<option>City...</option>	
<?php

foreach ($countryArray as $key => $value) {
	# code...
	?>
	<option><?php echo "$value"; ?></option>

<?php } ?>


</select>
</p>
<br>
<!-- classwork one -->
<?php
$score = array('Philip' => '70', 'Kehinde' => '71', 'Bunmi' => '100', 'Femi' => '74', 'Toafeeq' => '75', 'Ibrahim' => '76', 'Jonathan' => '77', 'Kipps' => '78', 'Emmanuel' => '100');
?>
<table class="table-bordered table-hover">
	<thead>
		<th>Serial Number</th>	
		<th>Student Name</th>
		<th>Php Score</th>		
	</thead>
	<tbody>
		<?php 
			$counter =0;
			foreach ($score as $key => $value) {
				# code...
				$counter++;
				?>
				<tr>
				<td><?php echo $counter; ?></td>
				<td><?php echo $key; ?></td>
				<td><?php echo $value; ?></td>
				</tr>
			<?php } ?>
		
	</tbody>
</table>
<?php 

$scorestwo = array(
	array('Philip','70', '65' ),
	array('Kehinde','76', '68' ),
	array('Taofeeq','73', '69' ),
	array('Femi','73', '68' ),
	array('Kehinde','70', '70' ),
	array('IK','80', '65' ),
	array('Ibrahim','76', '72' ),
	array('Jonathan','74', '65' ),
	array('Kipps','73', '73' ),
	array('Seun','70', '70' ),
	array('Bunmi','80', '100' ),
	array('Emmanuel','100', '100' )
	 );

echo  "<pre>";
print_r($scorestwo);
echo "</pre>";
?>
<p>Dear <?php echo $scorestwo[10][0] ?>,</p>
<p>How are you and <?php echo $scorestwo[7][0] ?>. We are expecting you at Moat Academy. <?php echo $scorestwo[2][0] ?>, <?php echo $scorestwo[11][0] ?> and <?php echo $scorestwo[3][0] ?> extends their greetings.</p>
<p>Meanwhile, our first section result is out. To mention few:</p>
<p><?php echo $scorestwo[3][0] ?> got <?php echo $scorestwo[3][1] ?> in Php and <?php echo $scorestwo[3][2] ?> in Mysql</p>
<p><?php echo $scorestwo[8][0] ?> scored <?php echo $scorestwo[8][1] ?> in Mysql</p>
<p>And <?php echo $scorestwo[6][0] ?> got <?php echo $scorestwo[6][1] ?> in Php and <?php echo $scorestwo[6][2] ?> in Mysql.</p>
<p>Kindly show up in school to check your scores.</p>
<br>
<p>Cheers</p>

<table class="table-bordered table-hover">
<thead>
	<tr>
		<td>S/N</td>
		<td>Name</td>
		<td>Php Scores</td>
		<td>Mysql Scores</td>
	</tr>
</thead>
<tbody>
<?php 
for ($row=0; $row < 11; $row++) { 
	# code...
	?>
	<tr>
	<td></td>
	<?php
	for ($innerloop=0; $innerloop < 3; $innerloop++) { 
		# code...
		?>
		
		<td><?php echo $scorestwo[$row][$innerloop]; ?></td>
		
	<?php } ?>
	</tr>
<?php } ?>
	 </tbody>
	 <tfoot>
	 	<th colspan="4"> <!-- merges 4 columns; not bootstrap. -->
	 		Student Results 2017.
	 	</th>
	 </tfoot>
</table>
</div>
</div>
<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>

</html>
