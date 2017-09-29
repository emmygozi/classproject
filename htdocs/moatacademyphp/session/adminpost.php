<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";


$user = $_POST['user'];
$passwordone = $_POST['firstpass'];
$passwordtwo = $_POST['secondpass'];

$encryptedpass = md5($passwordone);

$conn = mysqli_connect('localhost', 'root', 'root', 'party');



$query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$user' AND apassword = '$encryptedpass'")or die (mysqli_error($conn));


$num_of_rows = mysqli_num_rows($query);

echo $num_of_rows;
if ($num_of_rows > 0) {
  //redirect to profile page.
}else{
  //redirect to login page.
}


 ?>
