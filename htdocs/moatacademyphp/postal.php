<html>
<head>
<title> Monday, 14th August 2017</title>
<link href="boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">
	
	<form action="index.php" method="get">
	<div class="form-group">
	<label> Username</label>
	<input type="text" name="user"  class="form-control"/>
	
	</div>
	<div class="form-group">
	<label>Password </label>
	<input type="password" name="pass"  class="form-control"/>
	</div>

	<div class="form-group">
		<select name="choose">
		<option value="">Select </option>
			<option value="1">Teacher</option>
			<option value="2">Student</option>
		</select>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-danger">Submit</button>
	</div>
	
	
	</form>
</div>



<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>
</html>