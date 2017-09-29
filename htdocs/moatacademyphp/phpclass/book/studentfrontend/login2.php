
<?php

require("Student_Class.php");

$matric = $_POST['matric'];
$pass = $_POST['pass'];

echo "<pre>";
print_r($_POST);
echo "</pre>";
$obj->login($matric, $pass);
 ?>
