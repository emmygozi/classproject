<html>
<head>
<title>End of Bootcamp Party Registration</title>
<link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>
  </<?php
if (isset($_SESSION['user_online'])) {

  header("location.admin.php");


  if ($_POST) {
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['oldpass'];

    $res = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user' AND apassword = md5('$oldpassword')");

    $total_records = mysqli_num_rows($res);

    if ($total_records > 0 ) {
      # code...
      mysqli_query($con, "UPDATE admin SET apassword =md5('$newpass') WHERE username = '$user'");

      $no = mysqli_affected_rows($con);
      if ($no) {
        echo "<div class='alert alert-success'>Password Succesfully changed!</div>";
      }
    }
  }


}


   ?>

<div class="container-fluid">

<h1>Admin Login End of Bootcamp Party Registration</h1>
<p>You can change password by filling the form below: or <a href="changeadminpassword.php">here </a>to logout</p>




	<form action=""  method="post" >
    

	<div class="row">
	<div class="form-group col-md-4">
	<label> Old Password</label>
	<input type="password" name="oldpass"   class="form-control" required/>
	</div>
	</div>

	<div class="row">
	<div class="form-group col-md-4">
	<label>New Password</label>
	<input type="password" name="newpass"  id="pass1"  class="form-control"/>
	</div>
	</div>

  <div class="row">
  <div class="form-group col-md-4">
  <label>Confirm Password:</label>
  <input type="password" name="confirmpass"  id="pass2"  class="form-control"/>
  </div>
  </div>

  <div class="form-group">
<label>Have You Learnt Programming Before?</label>
<select name='b4' id='b4'>
<option value=''>Please Select</option>
<option value='yes'>Yes</option>
<option value='no'>No</option>
</select>
</div>
<div id="result"></div>



	<div class="form-group">
  <button type="button" name="cancel" onclick="header.location.href='changeadminpassword.php'"  class="btn btn-danger btn-sm">Cancel</button>
	 <button type="submit" name="send"   class="btn btn-success btn-sm">Update</button>

 </div>





	</form>

</div>
<script type="text/javascript">
$(document).ready(function(){

	/* $("#changepass").submit(function(event){
		event.preventDefault();
		$("#result").load('external.php');

	}); */

	$("#b4").change(function(){
		var resp = $("#b4").val();
		var data = $("#username").val();
		var pass = '1234';
		//var tobesent = "user="+data+"&password="+pass ;
		var tobesent ={user:data,password:pass};
		//alert(tobesent);
		if(resp =='yes'){
			$("#result").load('external.php',tobesent,function(){alert("I have come back");});

		}else{
			alert('no');
			$("#result").empty();
			$("#changepass").submit();
		}

	});
})

</script>
<?php
include("footer.php");
 ?>
