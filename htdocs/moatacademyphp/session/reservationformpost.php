<?php
session_start();
//pick variables
//connect to db
//write a query to connect to db
//Run the query.



$firstname = addslashes($_POST['firstname']);
$lastname = $_POST['lastname'];
$phone = $_POST['number'];
$preference = $_POST['food'];

if (isset($_FILES['fileupload'])) {
  # code...
  $folder = "../uploads/";
  $errors = array(); // erros come in an ArrayAccess

  $file_name = $_FILES['fileupload']['name'];
  $file_size = $_FILES['fileupload']['size'];
  $file_temp = $_FILES['fileupload']['tmp_name'];
  $file_type = $_FILES['fileupload']['type'];

  //get the file extension
  $file_ext = strtolower(end(explode('.', $file_name)));

  $extensions = array("jpeg","jpg","png");

  if (in_array($file_ext, $extensions) === false) {
    # code...
    $errors[] = "Extension not allowed, please choose a JPEG or  PNG file.";
    print_r($errors);
  }

  if ($file_size > 2097152) {
    # code...
    $errors[]="File must be exactly 2 MB";
  }

  if (empty($errors) == true) {
    # code...
    $picturerename = $phone.$file_name;
    move_uploaded_file($file_temp, $folder.$picturerename);

    $conn = mysqli_connect('localhost', 'root', 'root', 'party');



      # code...
      if ($conn) {
        # code...
        echo "You have sucessfully connected to db<br>";
        //INSERT IN DB  you can skip auto increment using this method.
        if (move_uploaded_file($file_temp, $folder.$file_name)) { //moving to  permanent folder sucessful?
          # code...
          mysqli_query($conn, "INSERT INTO registration SET  first_name = '$firstname', last_name = '$lastname', phone_number = '$phone', passport_name = '$file_name' ")or
          die(mysqli_error($conn)); //or die() helps you generate the mysql error coming from database enginefor debugging. should not be used
          //in production environment
        }


        $id = mysqli_insert_id($conn); // get last insert id if it is set to autoincrement in db.
        //

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


$_SESSION['message'] = "Your Application was successful";
header("location:reservationformpg1.php");
/*
    header("location:reservationformpg1.php?dft=1");

    **/

  }else {
    //header("location:reservationformpg1.php?dft=0");
    $_SESSION['message'] = "Why didn't you supply image?";
    header("location:reservationformpg1.php");

  }


}


//


echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

 ?>
