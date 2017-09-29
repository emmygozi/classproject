<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', 'root', 'student');

$res = mysqli_query($conn, "select course_name from courses");




	
?>

<div>
<select name='myname' id='myname'>
<option value=''>Please Select</option>
	<?php while ($data = mysqli_fetch_assoc($res)){	
		echo	$all = $data['course_name'];
			echo "<option value='$all'>$all</option>";

}


?></select>
</div>


</body>
</html>