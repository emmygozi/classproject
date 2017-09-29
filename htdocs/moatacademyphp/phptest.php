
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>Hello world 1</p>

<?php
print("Hello world 2");
?>

<p>Hello world 3</p>

<?php
echo("Hello world 4");
echo '<br>';
?>

<?php
$a = 15;
$b = "32 42 Bottles";
$c = $a + $b;
echo($c);
echo '<br>';
$q = 2 / 4;
$w = (float)$q;

echo ("<p>".(int)$q."</p>");
echo ($w);
echo '<br>';
//echo ("It's my birthday");
//echo ('It\'s my birthday'); //escape character...
//phpinfo();
?>

<?php
echo <<<MOAT
    This is me
    I know 
    I really know 
MOAT;

/*echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
foreach ($_SERVER as $var => $value){
    echo "$var => $value </br>";
}
**/  //double asterisk quote for php

?>
</body>
</html>


