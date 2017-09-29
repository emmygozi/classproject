<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

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


echo "<table border='1' width='500'>";
echo "<thead>
<th>#</th>
<th>City</th>
<th>Country</th>
<th>Continent</th>
</thead>";
$serial = 1;
foreach ($multiCity as $key => $value) {
	# code...
	$city = $value[0];
	$country = $value[1];
	$continent = $value[2];
	echo "<tr>
		<td>$serial</td>
		<td>$city</td>
		<td>$country</td>
		<td>$continent</td>
	</tr>";
	$serial ++;
}

?>

 </body>
</html>