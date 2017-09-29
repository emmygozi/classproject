
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">
	<title>Classwork six</title>
</head>
<body>
<p>Age</p>

<?php

function displayResult($numbr){
	echo "<select>";
	for ($i=0; $i < $numbr ; $i++) { 
		# code...
		echo "<option> $i </option>";
	}
	echo "</select>";
}

?>



<?php

displayResult(20);

$multiCity = array(
	array('Tokyo','Japan', 'Asia' ),
	array('Mexico city','USA', 'North America' ),
	array('Mumbai','India', 'Asia' ),
	array('Seoul','Korea', 'Asia' ),
	array('Shangai','China', 'Asia' ),
	array('Lagos','Nigeria', 'Africa' ),
	array('Buenos Aires','Argentina', 'South America' ),
	array('Cairo','Eygpt', 'Africa' ),
	array('London','England', 'Europe' ),
	array('Ontario','Canada', 'North America' )
	 );
?>

<table class="table table-bordered table-hover">
<thead>
	<tr>
		<th>S/N</th>
		<th>City</th>
		<th>Country</th>
		<th>Continent</th>
	</tr>
</thead>
<tbody>
<?php 
for ($row=0; $row < 10; $row++) { 
	# code...
	?>
	<tr>
	<td></td>
	<?php
	for ($innerloop=0; $innerloop < 3; $innerloop++) { 
		# code...
		?>
		
		<td><?php echo $multiCity[$row][$innerloop]; ?></td>
		
	<?php } ?>
	</tr>
<?php } ?>
	 </tbody>
	 <tfoot>
	 	<th colspan="4"> <!-- merges 4 columns; not bootstrap. -->
	 		Country information.
	 	</th>
	 </tfoot>
</table>




<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>
</html>


