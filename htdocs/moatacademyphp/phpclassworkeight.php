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
	
	<form action="indextwo.php" method="get" >
	<div class="row">
	<div class="form-group col-md-4">
	<label> First Name</label>
	<input type="text" name="user"  class="form-control"/>
	</div>
	
	</div>
	<div class="row">
	<div class="form-group col-md-4">
	<label>Last Name</label>
	<input type="text" name="pass"  class="form-control"/>
	</div>
	</div>

	<div class="form-group">
	<label>How did you hear about us?</label>
	<input type="checkbox" name="media[]" value="newsletter">
	Through newsletter
	<input type="checkbox" name="media[]" value="website">
	Your website
	<input type="checkbox" name="media[]" value="email marketing">
	Email marketing
		
	</div>


	<div class="form-group">
		<button type="submit" name="add"  class="btn btn-danger">Add</button>
	</div>
	
	
	
	</form>
</div>




<script src="boots/js/jquery-3.2.1.min.js"></script>
<script src="boots/js/bootstrap.min.js"></script>
</body>
</html>