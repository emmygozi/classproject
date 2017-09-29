<html>
<head>
<title>End of Bootcamp Party Registration</title>
<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>


	<script type="text/javascript">
/*
  function checkValidation() {
    var placeHolder = document.getElementById('pass2').value;
      var passwrd =  document.getElementById('pass1').value;

    if((passwrd == '') || (passwrd != placeHolder)){
          document.getElementById('pname').innerHTML = "Password Mismatch";
          document.getElementById('pname').style.color =' red';
          document.getElementById('pass1').style.border ='1px solid red';
          document.getElementById('pass2').style.border ='1px solid red';
          }
        else{
          document.getElementById('pname').innerHTML = "Input Validated and Submitted!";
          document.getElementById('pname').style.color = "green";
          document.getElementById('pass1').style.border ='1px solid green';
          document.getElementById('pass2').style.color =' green';
        }

  }

*/
  </script>
<!-- Note: when calling method with parameters in html, simply call functionName(x,y,..)
where 'x' and 'y' is the representation of parameter values -->
<div class="container-fluid">

<h1>Admin Login End of Bootcamp Party Registration</h1>

<?php
/*

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

	<form action="changeadminpassword.php" enctype="multipart/form-data" method="post" >
	<div class="row">
	<div class="form-group col-md-4">
	<label> First Name</label>
	<input type="text" name="user"   class="form-control" required/>
	</div>
	</div>

	<div class="row">
	<div class="form-group col-md-4">
	<label>Password:</label>
	<input type="password" name="firstpass"  id="pass1"  class="form-control"/>
	</div>
	</div>


<div class="row">
<div class="form-group col-md-4">
<label>Confirm Password: </label>
<input type="password" name="secondpass" id="pass2"   class="form-control" />
</div>
</div>




	<div class="form-group">
	 <button type="submit" name="send"   class="btn btn-success btn-sm">Sign Up</button>

 </div>





	</form>

</div>




<script src="../boots/js/jquery-3.2.1.min.js"></script>
<script src="../boots/js/bootstrap.min.js"></script>
</body>
</html>
