<!DOCTYPE html>
<html>
<head>
<?php
include('Counter_Class.php');

?>
	<title></title>

</head>
<body>

<?php
$counter1 = new Counter();
$counter2 = new Counter();

echo ($counter1->getCounter());
echo ($counter2->getCounter());

echo ($counter1::$counter);
echo ($counter1::getStatic());


?>

</body>
</html>

