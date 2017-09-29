
<head>
<title> Form Group</title>
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">



</head>

<body>



<?php

//assignment : create array with 5 pets, use for loop to display results.

$pet = array("Dog", "Fish", "Cat", "Hen", "Bird");

for ($i=0; $i < 5; $i++) {
	# code...
	echo "<pre>";
print_r($pet[$i]);
echo "</pre>";
}



?>

</div>
<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>

</html>
