<html>
<head>
<title></title>
</head>
<body>

<h1>Welcome to post page! </h1>
  <?php


$username = "New value";

if (isset($_COOKIE['classworkcookie'])) {



  echo "Welcome: ".$_COOKIE['classworkcookie'];
}else {
  echo "No Cookie";


  setcookie("classworkcookie2" , $username, time()+(1000*60*60));  //or you can do--- setcookie("classworkcookie2" , "New value",
  // time()+(1000*60*60));
  echo "We have set a new cookie: ".$_COOKIE['classworkcookie2'];
}


   ?>

</body>
</html>
