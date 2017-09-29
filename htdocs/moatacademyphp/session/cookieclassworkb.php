<html>
<head>
<title></title>
</head>
<body>

  <?php
  if ($_POST) {
    # code...

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  if (($username != "emmy") && ($password != "passer")) {
    # code...
    header("Location:incrementcookie.php");
  }else {

    setcookie("num" , 0, time()+(1000*60*60));
  }

}

   ?>

</body>
</html>
