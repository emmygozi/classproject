<?php
session_start();

if (isset($_SESSION['user'])) {
  # code...
  unset($_SESSION['user']);
  echo "You have logged out!";

}else{
  header("location:index3.php");
}

 ?>
