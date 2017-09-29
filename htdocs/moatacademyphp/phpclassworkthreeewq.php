<head>
<title> Form Group</title>
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">



</head>

<body>



<?php

/*for ($i=1; $i <= 10 ; $i++) { 
	# code...
	if (($i % 2) == 0) {
		# code...
		echo "$i";
		echo "<br>";
	}
}
//Another way to do it
for ($i=0; $i <= 10 ; $i=$i + 2) { 
	# this adds 2 to i; so i loops only in even numbers...
	echo "$i";
	echo "<br>";
}


$i = 10;
while($i >= 1) {
	# code...
	echo "$i";
	echo "<br>";
	$i--;
}


echo ("<div class='container'>
<table border='1' width='50%' class='table-bordered table-hover'>");

for ($i=1; $i <= 3 ; $i++) { 
	echo "<tr><td>$i</td><td></td><td></td></tr>";
}

echo ("</table>
</div>");

echo ("<div class='container'>
<select> <option>Select age...</option>");

for ($i=1; $i <= 70 ; $i++) { 
	echo "<option value='$i'>$i</option>";
}

echo ("</select>");
**/
$i = 1;
do{
	# code...
	echo "$i";
	echo "<br>";
	$i++;
}
while($i <= 10) 

?>

</div>
<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>

</html>
