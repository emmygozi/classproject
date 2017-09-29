<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

/*
$firstname = addslashes($_POST['firstname']);
$lastname = $_POST['lastname'];
$phone = $_POST['number'];
$preference = $_POST['food'];

//

$conn = mysqli_connect('localhost', 'root', 'root', 'party');

if ($conn) {
  # code...
  echo "You have sucessfully connected to db<br>";
  //INSERT IN DB  you can skip auto increment using this method.
  mysqli_query($conn, "INSERT INTO registration SET  first_name = '$firstname', last_name = '$lastname', phone_number = '$phone'")or
  die(mysqli_error($conn)); //or die() helps you generate the mysql error coming from database enginefor debugging. should not be used
  //in production environment

  $id = mysqli_insert_id($conn);

if (!empty($_POST['food'])) { //check to make sure user selects something
  # code...

  foreach ($preference as $key => $value) {
    # code...
    $query = "INSERT INTO preferences SET reg_id = '$id', item = '$value'";

    mysqli_query($conn, $query);
  }

}
  echo "The last id inserted was: ".$id;
}else {

  echo "Invalid Parameter";
}

**/

 ?>
