<?php


$username = $_GET['user'];
$score = $_GET['pass'];

$grade;
if ($score >= 70) {
	# code...
	$grade = "A";
}elseif ($score <= 69 && score >= 60) {
	# code...
	$grade = "B";
}elseif ($score <= 59 && $score >= 50) {
	# code...
	$grade = "C";
}elseif ($score <= 49 && $score >= 45) {
	# code...
	$grade ="D";
}elseif ($score <= 44 && $score >= 40) {
	# code...
	$grade = "E";
}else {
	$grade = "F";
}

echo "Hello $username your calculated grade is $grade";

?>