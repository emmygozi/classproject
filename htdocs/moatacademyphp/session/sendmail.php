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

  <form action="sendmailpost.php" method="post" >

    <div class="row">
      <div class="col-md-4">
  <div class="form-group">
     <label><b>Email</b></label>
     <input type="email" class="form-control" id="mail" placeholder="Enter Email" name="email" required>
  </div>
  </div>
  </div>

  <div class="row">
    <div class="col-md-4">
  <div class="form-group">
     <label><b>Subject</b></label>
    <input type="text" class="form-control" id="pass" placeholder="Enter Subject" name="subject" required>
  </div>
  </div>
  </div>

 <div class="row">
   <div class="col-md-4">
  <div class="form-group">
    <label><b>Please type in your message...</b></label>
     <textarea type="text" class="form-control" tabindex="4" placeholder="Message" name="message" ></textarea>
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
</html>
