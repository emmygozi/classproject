
<head>
<title> Form Group</title>
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">



</head>

<body>



<?php

//assignment : create array with 5 pets, use for loop to display results.

$arrayName = array("12345678" , "0987654321" );
echo "My number is ".$arrayName[0];
echo "<br>";

echo "<pre>";
print_r($arrayName);
echo "</pre>";

//Using CONSTANTS  in arra
define("GOAT", "African Goat");
$pet = array("Dog", GOAT, "Cat");

echo "<pre>";
print_r($pet);
echo "</pre>";


$pets = array(1 =>"Dog", 2=>"Fish", 3 =>"Cat");
//implications location $pets[0] is empty.
echo "<pre>";
print_r($pets);
echo "</pre>";

?>

</div>
<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>

</html>
