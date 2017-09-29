<?php
session_start();
//pick variables
//connect to db
//write a query to connect to db
//Run the query.



$email = $_POST['email'];
$message = $_POST['message'];
$checkbox = $_POST['remember'];


  # code...
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  if ($checkbox == 'on') {
    # code...
    $checkbox = 1;
  }else {
    $checkbox = 0;
  }



    $conn = mysqli_connect('localhost', 'root', 'root', 'myproject');



      # code...
      if ($conn) {
        # code...
        echo "You have sucessfully connected to db<br>";
        //INSERT IN DB  you can skip auto increment using this method.



          mysqli_query($conn, "INSERT INTO contact_us SET  email = '$email', message = '$message', remember = '$checkbox' ")or
          die(mysqli_error($conn)); //or die() helps you generate the mysql error coming from database enginefor debugging. should not be used
          //in production environment





    //  $_SESSION['message'] = "Your Application was successful";
    //  header("location:reservationformpg1.php");
      /*
          header("location:reservationformpg1.php?dft=1");

          **/
      }else {

        //header("location:reservationformpg1.php?dft=0");
      //  $_SESSION['message'] = "Why didn't you supply image?";
      //  header("location:reservationformpg1.php");
      }









//



 ?>
