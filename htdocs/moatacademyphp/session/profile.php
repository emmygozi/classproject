<?php
session_start();
if (isset($_SESSION['user'])) { //user profile that  saves session
  # code...
  $user = $_SESSION['user'];
  echo $user;
  echo "<a href= 'logout.php'>Logout</a>";
}else {
  # code...
  header("location:index3.php");
}

 ?>
