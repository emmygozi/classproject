<html>
<head>
<title></title>
</head>
<body>

  <?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if (($username != "emmy") && ($password != "eureka")) {
    # code...
    header("Location:index.php");
  }else {
    setcookie("cookie" , $username, time()+(1000*60*60));
  }


   ?>

</body>
</html>
