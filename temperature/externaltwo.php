<?php
//use this when data is sent as string variable
/* echo "<p>Great,". $_GET['user']. " It's good to know you have learnt programming before</p>";
echo "Your password is ". $_GET['password']; */

echo "<pre>";
print_r($_POST); 
echo "</pre>";

if (isset($_POST['far'])) {
	$a = $_POST['far'];
	$far = 9/5 * ($a - 273)+32;
	echo  "Fahrenit is ". $far;
}else if (isset($_POST['cel'])) {
	$b = $_POST['cel'];
	$cel = 5/9 * ($b - 32);
	echo "Celsuis is ". $cel;
}
//second commit
?>
