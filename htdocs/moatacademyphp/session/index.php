<html>
<head>
<title> php calculator</title>
<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">

	<form action="dashboard.php" method="POST" class="form-inline">
	<div class="form-group ">
	<label>username</label>
	<input type="text" name="username" placeholder="username" class="form-control"/>
	</div>


	<div class="form-group ">
	<label>Password</label>
	<input type="password" name="password" placeholder="Password"  class="form-control"/>
	</div>

  <div class="form-group ">
	<label>Email</label>
	<input type="email" name="email" placeholder="Email"  class="form-control"/>
	</div>


	<div class="form-group">
		<button type="submit" name="submitted"  class="btn btn-danger">Submit</button>
	</div>



	</form>
</div>


<?php

?>

<script src="../boots/js/jquery-3.2.1.min.js"></script>
<script src="../boots/js/bootstrap.min.js"></script>
</body>


</html>
