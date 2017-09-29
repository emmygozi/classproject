<html>
<head>
<title></title>
</head>
<body>

<h1>Welcome to post page! </h1>
  <?php




if (isset($_COOKIE['cookie'])) {



  echo "Welcome: ".$_COOKIE['cookie'];
}else {
  header("Location:index.php");
}

/*
if (($username != "") && ($password != "")) {
  # code...

  if (($username != "emmy") && ($password != "eureka")) {
    # code...
    header("Location:index.php");
  }

}
*/

   ?>

</body>
</html>
