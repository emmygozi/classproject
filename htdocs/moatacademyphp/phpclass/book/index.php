<!DOCTYPE html>
<html>

<?php include('Book_Class.php');

 ?>
<head>
	<title></title>
</head>
<body>

<form method="post" action="index.php">
<input type="text" name="isbn" placeholder="ISBN" ><br>
<input type="text" name="title" placeholder="Title" ><br>
<input type="text" name="author" placeholder="Author" ><br>
<input type="submit" name="submit" value="submit" ><br>
</form>

<?php

if (isset($_POST['submit'])) {
	$isbn = $_POST['isbn'];
	$title = $_POST['title'];
	$author = $_POST['author'];

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
**/
	
	$book = new Book();



	$book->setIsbn($isbn);
	
	$book->setTitle($title);
	$book->setAuthor($author);

	echo "ISBN number is: ".$book->getIsbn()."<br>";
	echo "Book Title is: ".$book->getTitle()."<br>";
	echo "Book author is: ".$book->getAuthor()."<br>";
	
}

?>

</body>
</html>