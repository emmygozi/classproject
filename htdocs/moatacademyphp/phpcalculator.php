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
	
	<form action="index.php" method="get" class="form-inline">
	<div class="form-group">
	<label> Number 1</label>
	<input type="text" name="user"  class="form-control"/>
	
	</div>
	<div class="form-group">
	<label>Number 2</label>
	<input type="text" name="pass"  class="form-control"/>
	</div>


	<div class="form-group">
		<button type="submit" name="add"  class="btn btn-danger">Add</button>
	</div>
	
	<div class="form-group">
		<button type="submit" name="sub"  class="btn btn-success">Subtract</button>
	</div>
	
	<div class="form-group">
		<button type="submit" name="mul"  class="btn btn-warning">Multiply</button>
	</div>
	
	
	</form>
</div>




<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>
</html>