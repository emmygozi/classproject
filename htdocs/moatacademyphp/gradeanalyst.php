<html>
<head>
<title> php calculator</title>
<link href="boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">
	
	<form action="gradeanalyst.php" method="POST" class="form-inline">
	<div class="form-group ">
	<label> First Name</label>
	<input type="text" name="user"  class="form-control"/>
	</div>
	
	
	<div class="form-group ">
	<label>Score</label>
	<input type="text" name="pass"  class="form-control"/>
	</div>

	
	<div class="form-group">
		<button type="submit" name="add"  class="btn btn-danger">Submit</button>
	</div>
	
	
	
	</form>
</div>


<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {
	# code...


$username = $_POST['user'];
$score = $_POST['pass'];

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

echo "Hello ". $username. " your calculated grade is ". $grade;


}
?>

<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>
</html>