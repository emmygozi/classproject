<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'root', 'student');

$res = mysqli_query($conn, "select course_name from courses");


print_r($res);

while ($data = mysqli_fetch_assoc($res)){
	print_r($data);

	$_SESSION['data'] = $data;
}

?>