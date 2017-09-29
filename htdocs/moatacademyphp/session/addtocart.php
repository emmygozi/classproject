<?php
// in product homepage <a href="whertogo.php?p=1" class="btn btn-danger">product click></a>

session_start();

$_SESSION['product'][] = $_GET['p'];
//redirect to show in cart.


//
foreach ($_SESSION['product'] as $key => $value) {
	# code...
	//select * from tablename where pid = $value;

	//fetch from database
}


?>