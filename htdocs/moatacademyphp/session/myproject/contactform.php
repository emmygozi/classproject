<html>
<head>
<title> contact form</title>
<link href="../../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>

</head>
<body>
<div class="container">
<div class="row">

	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md"> <!-- define modal size -->

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button style="float: right;" type="button" class="btn-danger" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header is Nice</h4>
      </div>
      <div class="modal-body">

      <!--Form start -->

      <form action="contactformpost.php" method="post" >
  		<div class="form-group">
   			 <label><b>Email</b></label>
   			 <input type="text" class="form-control" id="mail" placeholder="Enter Email" name="email" required>
		</div>


      <div class="form-group">
        <label><b>Please type in your message...</b></label>
         <textarea type="text" class="form-control" tabindex="4" placeholder="Message" name="message" ></textarea>
      </div>

    <input type="checkbox" name="remember"  >
    <span>Remember me</span>



        <div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="close">
  		<span aria-hidden="true">&times;</span>
		</button>

	<strong>Important Notice</strong> <span>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</span>

	</div>


      </div>
      <div class="modal-footer">
      <div class="form-group">
    <button type="submit" name="send" data-di  class="btn btn-info">Submit</button>
  </div>
         </div>
    </div>

  </div>
</div>



</div>

</div>




<script src="../../boots/js/jquery-3.2.1.min.js"></script>
<script src="../../boots/js/bootstrap.min.js"></script>
</body>
</html>
