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



$sum = $_GET['user'] + $_GET['pass'];

$sub = $_GET['user'] - $_GET['pass'];

$mult = $_GET['user'] * $_GET['pass'];


//functions to add.
function adding($a, $b){
	$q = $a + $b;
	echo "$q";
}

function subing($a, $b){
	$q =  $a - $b;
	echo "$q";
}

function multing($a, $b){  
	$q =  $a * $b;
	echo "$q";
}



if (isset($_GET['add'])) {
	# code...
	echo "$sum <br>";
	adding($_REQUEST['user'] , $_REQUEST['pass']);
}

if (isset($_GET['sub'])) {
	# code...
	echo "$sub <br>";
	subing($_REQUEST['user'] , $_REQUEST['pass']);
}

if (isset($_GET['mul'])) {
	# code...
	echo "$mult <br>";
	multing($_REQUEST['user'] , $_REQUEST['pass']);
}

?>

</body>
</html>