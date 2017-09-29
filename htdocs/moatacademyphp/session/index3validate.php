<?php
session_start();

if ($_POST) { //returns true
  # code...
  if (($_POST['username'] == 'student') AND ($_POST['password'] == 'student') ){
    # code...//keep his details in a persistent structure
    //direct him to a profile page
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['greeting'] = "You are welcome to our school";
    header("location:profile.php");
  }else{
    //send him back to login page
    header("location:index3.php");
  }
}


 ?>
