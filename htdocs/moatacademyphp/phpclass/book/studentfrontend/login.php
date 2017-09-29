
<html>
<head>
<title>Login</title>
<link href="../../../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">

<?php
$title = "Login";
require("header.php");



 ?>


	<form action="login2.php"  method="post" >

	<div class="row">
	<div class="form-group col-md-4">
	<label> Matric No:</label>
	<input type="text" name="matric"  class="form-control" required/>
	</div>
	</div>

	<div class="row">
	<div class="form-group col-md-4">
	<label>Password:</label>
	<input type="password" name="pass"  class="form-control" required/>
	</div>
	</div>





	<div class="form-group">
	 <button type="submit" name="login"   class="btn btn-success btn-sm">Login</button>

 </div>





	</form>

</div>


</body>
</html>
