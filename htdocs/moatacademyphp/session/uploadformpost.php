<?php
/*
echo "<pre>";
print_r($_FILES);
var_dump($_FILES);
echo "</pre>";

echo $_FILES['fileupload']['name']."<br>";
echo $_FILES['fileupload']['type']."<br>";
echo $_FILES['fileupload']['error']."<br>";
**/
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
    move_uploaded_file($file_temp, $folder.$file_name);
    echo "Success";
  }else {
    print_r($errors);
  }

}

 ?>
