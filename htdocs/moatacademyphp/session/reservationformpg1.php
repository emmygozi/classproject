<html>
<head>
<title>End of Bootcamp Party Registration</title>
<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>

<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">

<h1>End of Bootcamp Party Registration</h1>

<?php
session_start();

if (isset($_SESSION['message'])) {
	$m = $_SESSION['message'];
	echo $m;
	session_destroy();
}
/*
if (isset($_GET['dft'])) {
	$m = $_GET['dft'];

	if ($m == '1') {
		echo "Your Application was sucessful";
	}else {
		echo "something went wrong";
	}
}
**/
 ?>

	<form action="reservationformpost.php" enctype="multipart/form-data" method="post" >
	<div class="row">
	<div class="form-group col-md-4">
	<label> First Name</label>
	<input type="text" name="firstname"  class="form-control" required/>
	</div>
	</div>

	<div class="row">
	<div class="form-group col-md-4">
	<label>Last Name</label>
	<input type="text" name="lastname"  class="form-control" required/>
	</div>
	</div>


<div class="row">
<div class="form-group col-md-4">
<label>Phone Number</label>
<input type="text" name="number"  class="form-control" required/>
</div>
</div>

	<div class="form-group">
	<label>What would you like to eat?</label> <br>
	<input type="checkbox" name="food[]" value="rice">
	Rice <br>
	<input type="checkbox" name="food[]" value="pounded yam">
	Pounded Yam <br>
	<input type="checkbox" name="food[]" value="snacks">
	Snacks

	</div>

	<div>

	</div>






		<div class="row">
			<div class="col-md-4">
	<div class="form-group">
		 <label for="subject"><b>Your File</b></label>
		 <input type="file" class="form-control" id="file_upload" placeholder="Enter Email" name="fileupload" required>
	</div>
	</div>
	</div>


	<div class="form-group">
	 <button type="submit" name="send"   class="btn btn-success btn-sm">Register</button>

 </div>





	</form>

</div>




<script src="../boots/js/jquery-3.2.1.min.js"></script>
<script src="../boots/js/bootstrap.min.js"></script>
</body>
</html>
