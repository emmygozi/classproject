<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

//this works for both $_POST and $_GET
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_GET['media'][0]; //get multidimensional array.
echo "<br>";
echo "<br>";

foreach ($_REQUEST['media'] as $key => $value) { // t loop through all media content.
	# code...
	$firstArray = $value;
	echo $firstArray;
	echo "<br>";

	
}


?>

</body>
</html>